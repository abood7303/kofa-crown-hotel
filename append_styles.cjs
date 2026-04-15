const https = require('https');
const fs = require('fs');

const urls = [
    "https://contribution.usercontent.google.com/download?c=CgthaWRhX2NvZGVmeBJ8Eh1hcHBfY29tcGFuaW9uX2dlbmVyYXRlZF9maWxlcxpbCiVodG1sXzdhMTJlNDFjMmFlZTQ2MDFhM2U2MmE0YjY4YmE2YzUyEgsSBxDc_LbxmxoYAZIBJAoKcHJvamVjdF9pZBIWQhQxMzM2NjI3OTM2MTk3Mzg5NzExOQ&filename=&opi=89354086",
    "https://contribution.usercontent.google.com/download?c=CgthaWRhX2NvZGVmeBJ8Eh1hcHBfY29tcGFuaW9uX2dlbmVyYXRlZF9maWxlcxpbCiVodG1sXzM4NGNkM2FiZjVmNjRjZTZiNGFhOGQ0ZWRkNDU4MmY3EgsSBxDc_LbxmxoYAZIBJAoKcHJvamVjdF9pZBIWQhQxMzM2NjI3OTM2MTk3Mzg5NzExOQ&filename=&opi=89354086",
    "https://contribution.usercontent.google.com/download?c=CgthaWRhX2NvZGVmeBJ8Eh1hcHBfY29tcGFuaW9uX2dlbmVyYXRlZF9maWxlcxpbCiVodG1sX2U1ZmY0NTkxMDBmMDQyMGE4NzdiZmVjOTExZjYyMTc3EgsSBxDc_LbxmxoYAZIBJAoKcHJvamVjdF9pZBIWQhQxMzM2NjI3OTM2MTk3Mzg5NzExOQ&filename=&opi=89354086",
    "https://contribution.usercontent.google.com/download?c=CgthaWRhX2NvZGVmeBJ8Eh1hcHBfY29tcGFuaW9uX2dlbmVyYXRlZF9maWxlcxpbCiVodG1sXzg1NjdhZGI5N2NmZDQ1Mzc5YmVkN2MyZWViYmM2MDBlEgsSBxDc_LbxmxoYAZIBJAoKcHJvamVjdF9pZBIWQhQxMzM2NjI3OTM2MTk3Mzg5NzExOQ&filename=&opi=89354086"
];

async function fetchStyles(url) {
    return new Promise((resolve, reject) => {
        https.get(url, (res) => {
            let data = '';
            res.on('data', chunk => data += chunk);
            res.on('end', () => {
                const match = data.match(/<style>([\s\S]*?)<\/style>/);
                if (match) {
                    resolve(match[1]);
                } else {
                    resolve('');
                }
            });
        }).on('error', reject);
    });
}

async function main() {
    let allStyles = '';
    for (const url of urls) {
        const style = await fetchStyles(url);
        allStyles += '\n' + style;
    }

    let appCss = fs.readFileSync('resources/css/app.css', 'utf8');
    appCss += `\n@layer utilities {\n${allStyles}\n}`;
    fs.writeFileSync('resources/css/app.css', appCss);
    console.log("Appended missing styles");
}

main();

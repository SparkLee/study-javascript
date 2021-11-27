// How do I start with Node.js after I installed it? https://nodejs.org/en/docs/guides/getting-started-guide/

// 启动服务命令: node quickstart.js
// 访问服务地址：http://localhost:3000

const http = require('http');

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
    // res.statusCode = 200;
    // res.setHeader('Content-Type', 'text/plain');
    // res.end('Hello World');

    res.writeHead(200, { 'Content-Type': 'text/html' });
    res.write('<head><meta charset="utf-8"/></head>'); // 解决中文乱码问题
    res.write('<h1>Node.js</h1>');
    res.write('<b>亲爱的，你慢慢飞，小心前面带刺的玫瑰...</b>');
    res.end('<p>Hello World</p>');
});

server.listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
})
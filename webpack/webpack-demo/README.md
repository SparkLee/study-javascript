# 官方入门文档
[Basic Setup](https://webpack.js.org/guides/getting-started)

- 安装
```shell
$ mkdir webpack-demo
$ cd webpack-demo
$ npm init -y
$ npm install webpack webpack-cli --save-dev
$ npm install --save lodash
```

- 构建与启动
```bash
$ npx webpack
或者 $ npx webpack --config webpack.config.js
# 在浏览器中打开 index.html

# 或者
$ npm install
$ npm run build
$ npm run start
```
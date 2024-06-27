# RandomUrl_Vercel
使用Vercel无需服务器即可部署你的专属随机图API！！！


## 一键部署！
[![Deploy with Vercel](https://vercel.com/button)](https://vercel.com/import/project?template=https://github.com/lianlianlianlianlianlian/RandomUrl_Vercel)


## 常见问题
1. Vercel部署PHP项目后 需要去项目设置里把 Node.js Version 改成1.8.x （默认是20.x）
<img width="1228" alt="image" src="https://github.com/lianlianlianlianlianlian/RandomUrl_Vercel/assets/36120596/145e735b-9af1-43ea-91ec-65bd76c5d26f">


2. 修改index.html的信息 主要是把我的默认信息改成你自己的

3. Vercel 的函数部署模式会将你的 PHP 脚本放在 /var/task/user/api/ 目录下 调用url目录下txt文件里的外部url链接 需要在php目录里改成 /var/task/user/url/xxxx.txt （我已经改好了）

4. Vercel版本 暂时不清楚怎么设置伪静态 所以域名路径必须带/api/random.php。 这个需要注意！！！

5. 这个方式是我突发奇想到的 似乎没有人这样玩 可能问题多多 不要骂我！！！

6. 绑定好你的域名后 调用地址 就是 [https://你的域名/api/random.php](https://xn--6qqv7i2xdt95b/api/random.php)

7. url目录下的txt文件里的url地址 需要自行添加。

8. 暂时没啥要说的 不懂就问 使用此项目需要一丢丢门槛 但不难 也不吃Vercel流量 问题点已经给大伙排查完了

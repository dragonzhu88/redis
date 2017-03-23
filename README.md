# redis
1，安装redis
```
brew install redis
```

2，修改配置文件
```
 sudo vim /usr/local/etc/redis.conf
```


![修改配置项 daemonize为 yes](http://upload-images.jianshu.io/upload_images/5329195-ef40c2f3f8fe645e.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

![修改端口号为 7200](http://upload-images.jianshu.io/upload_images/5329195-8831d2bc81c8b305.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)


3，启动redis-server
```
sudo redis-server /usr/local/etc/redis.conf
```
![启动redis](http://upload-images.jianshu.io/upload_images/5329195-ba7ac61aac7f796e.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

4，用ps aux | grep redis-server 查看是否启动

```
ps aux | grep redis-server
```
![结果](http://upload-images.jianshu.io/upload_images/5329195-ac3acdd3de5841e3.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

5，启动客户端

```
redis-cli -h 127.0.0.1 -p 7200
```
![成功画面](http://upload-images.jianshu.io/upload_images/5329195-a84c286f551cac07.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)



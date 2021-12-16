return reply(
    [
        `早上好` => `good morning`
        `你好` => `好个锤子`  
        `.*牛啊.*` => `牛啊牛啊`
        `.*教程.*` => `没有教程，学习要靠自己悟。`
        `.*(群主|群主在不在|机器人).*` => `https://img.doutugou.net/2019/06/9150e4e5gy1g3pyj97xjrj20f20bg0td.jpg`
    ]
)

return reply(      
    [
        `.*骚话.*` => `https://api.vvhan.com/api/sao`
        `语录` => `https://api.ixiaowai.cn/ylapi/index.php`
        `舔狗` => `https://api.ixiaowai.cn/tgrj/index.php`
    ]
    
return reply(      
    [
        `登录|登陆` => `若兰为您服务，请输入11位手机号码：`           
        `公告` => `暂无公告`
    ]
    
return reply(      
    [
        `风景` => `http://laosepi.org/gqpic.php`           
        `动漫` => `https://api.lyiqk.cn/acgst`     
        `美女` => `https://api.lyiqk.cn/purelady`
        `姐姐` => `lsp,爬`          
        `妹妹` => `https://laosepi.org/pic.php`         
        `.*(老司机|lsp|福利).*` => `http://3650000.xyz/random/?mode=66`
    ]   
    
return reply(      
    [
        `京东菜单` => `               京东菜单 ———————————————    
登录  丨  查询  丨  公告 ———————————————`
     ]  
)

return reply(      
    [
        `娱乐菜单` => `               娱乐菜单 ———————————————     
风景 | 动漫 | 美女 | 姐姐 | 妹妹

福利 | 许愿 | 骚话 | 语录 | 舔狗 ———————————————`
    ]
)

return reply(      
    [
        `菜单` => `               京东菜单 
———————————————    
登录  丨  查询  丨  公告 ———————————————
               娱乐菜单 
———————————————      
风景|动漫|美女|姐姐|妹妹

福利|许愿|骚话|语录|舔狗 ———————————————` 
    ]  
)

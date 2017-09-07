var imgUrl = 'jadeland/img/logo.png';
var lineLink = 'http://jadeland.org';
var descContent = "your-content-desc";
var shareTitle = 'you-share-title';
var appid = 'your-app-id (from WeChat)';

function shareFriend() {
    WeixinJSBridge.invoke('sendAppMessage',{
                            "appid": appid,
                            "img_url": imgUrl,
                            "img_width": "640",
                            "img_height": "640",
                            "link": lineLink,
                            "desc": descContent,
                            "title": shareTitle
                            }, function(res) {
                            _report('send_msg', res.err_msg);
                            })
}
function shareTimeline() {
    WeixinJSBridge.invoke('shareTimeline',{
                            "img_url": imgUrl,
                            "img_width": "640",
                            "img_height": "640",
                            "link": lineLink,
                            "desc": descContent,
                            "title": shareTitle
                            }, function(res) {
                            _report('timeline', res.err_msg);
                            });
}
function shareWeibo() {
    WeixinJSBridge.invoke('shareWeibo',{
                            "content": descContent,
                            "url": lineLink,
                            }, function(res) {
                            _report('weibo', res.err_msg);
                            });
}
// WeChat browser will initial by above function and trigger WeixinJSBridgeReady event.
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {

        // share to friend
        WeixinJSBridge.on('menu:share:appmessage', function(argv){
            shareFriend();
            });

        // share to timeline
        WeixinJSBridge.on('menu:share:timeline', function(argv){
            shareTimeline();
            });

        // share to weibo
        WeixinJSBridge.on('menu:share:weibo', function(argv){
            shareWeibo();
            });
        }, false);
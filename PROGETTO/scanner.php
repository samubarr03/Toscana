<html>
<head>
</head>
<body>
    <video id="pre


<script src="instascan.min.js"></script>
<script type="text/javascript">
Let scanner-new Instascan.Scanner({video: document.getElementByIddd('preview')});
Instascan.Camera.getCameras ().then(function(cameras){
if(cameras.length>0)
{
// 0 open the front camera
// 1 open the back camera
scanner.start(cameras[0]);
}
else
{
alert("no camera Found");
}
}).catch(function(e)
{
console.error(e);
});
// scan then qr code part
scanner.addListener('scan', function(c){
});
</script>

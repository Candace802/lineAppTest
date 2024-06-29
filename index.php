<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="x-ua-compatible" content="IE=9,10,11">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta itemprop="keywords" content="">
    <meta property="og:title" content="">
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="dist/images/og.jpg">
    <meta itemprop="image" content="dist/images/og.jpg">
    <meta itemprop="name" content="">
    <title></title>
    <link rel="stylesheet" type="text/css" href="dist/css/index.css">
    <?php 
        $name = ""
        $userId = ""
    ?>
</head>

<body>

    <main>
        <div class="img">
            <img src="https://profile.line-scdn.net/0hcjvnHCvNPEVbFy6SyhJCOitHPy94ZmVXf3h3JmZEayJgJywVcXV7KzoTNX02dyxAfyF6K2dAMnVXBEsjRUHAcVwnYXRnI30Qf3N2qw" alt="">
        </div>
        <div class="name">
            吳淑美
        </div>
        <div class="flexBox2">
            <div class="leftBox">
                <div class="num">0</div>
                <div class="txt">預約</div>
            </div>
            <div class="rightBox">
                <div class="num">0</div>
                <div class="txt">票券</div>
            </div>
        </div>
        <div class="flexBox1">
            <div class="txt">儲值金</div>
            <div class="num">$1,000</div>
        </div>
        <div class="form">
            <div>
                <label for="">姓名</label>
                <input type="text" value="吳淑美">
            </div>
            <div>
                <label for="">性別</label>
                <div class="radioBox">
                    <div>
                        <input type="radio" name="sex" id="woman" checked>
                        <label for="woman">女</label>
                    </div>
                    <div>
                        <input type="radio" name="sex" id="man">
                        <label for="man">男</label>
                    </div>
                </div>
            </div>
            <div>
                <label for="">手機</label>
                <input type="tel" name="" id="" value="0908161631">
            </div>
            <div>
                <label for="">生日</label>
                <input type="date" name="" id="" value="2000-01-01">
            </div>
        </div>
    </main>
    <a href="javascript:;" class="orderBtn">我要預約</a>

    <script src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
    <script>
        async function main() {
			await liff.init({ liffId: "2005729349-JArNZYW5" })
			if (liff.isLoggedIn()) {
				liff.getProfile()
                    .then((profile) => {
                        $name = profile.displayName;
                        $userId = profile.userId;
                        console.log($name, $userId)
                    })
                    .catch((err) => {
                        console.log("error", err);
                    });
			}
		}
        main()
    </script>
</body>

</html>
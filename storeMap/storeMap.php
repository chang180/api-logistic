<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API 範例 </title>
</head>

<body>
    <div class="container">
        <!-- 超商門市地圖選取 -->
        <h1>API 範例</h1>
            <form action="storeMapAPI.php" method="post">
                <fieldset>
                    <legend>參數輸入</legend>
                    <table border="1">
                        <tr>
                            <td>API網址：</td>
                            <td><input name="url" value="https://ccore.newebpay.com/API/Logistic/storeMap" size="60" required><span style="color:red;">※必填</span></td>
                        </tr>
                        <tr>
                            <td>物流類別</td>
                            <td><input name="LgsType" maxlength="3" required><span style="color:red;">※必填(B2C , C2C)</span></td>
                        </tr>
                        <tr>
                            <td>物流廠商類別</td>
                            <td><input name="ShipType" size="15" required><span style="color:red;">※必填(1:統一，2:全家，3:萊爾富，4:OK)</span></td>
                        </tr>
                        <tr>
                            <td>商店訂單編號</td>
                            <td><input name="MerchantOrderNo" maxlength="30" required><span style="color:red;">※必填</span></td>
                        </tr>
                        <tr>
                            <td>串接程式版本</td>
                            <td><input name="Version" value="1.0" maxlength="5" required><span style="color:red;">※必填(固定為1.0)</span></td>
                        </tr>
                        <tr>
                            <td>時間戮記</td>
                            <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required><span style="color:red;">※必填</span></td>
                        </tr>
                        <tr>
                            <td>回傳格式</td>
                            <td><input name="RespondType" value="JSON" maxlength="6" required><span style="color:red;">※必填(請帶JSON)</span></td>
                        </tr>
                        <tr>
                            <td>商店代號</td>
                            <td><input name="UID_" maxlength="15" required><span style="color:red;">※必填(此為NWP商店代號)</span></td>
                        </tr>
                        <tr>
                            <td>key</td>
                            <td><input name="key" size="32" required><span style="color:red;">※必填</span></td>
                        </tr>
                        <tr>
                            <td>iv</td>
                            <td><input name="iv" minlength="16" maxlength="16" required><span style="color:red;">※必填</span></td>
                        </tr>
                        <tr>
                            <td>選取地圖後返回商店網址</td>
                            <td><input name="ReturnURL" maxlength="50"><span style="color:red;">※必填</span></td>
                        </tr>
                        <tr>
                            <td>額外資料(選填)</td>
                            <td><input name="ExtraData" maxlength="50"><span style="color:blue;">※原值回傳</span></td>
                        </tr>
                        <tr>
                            <td>超商門市名稱(選填)</td>
                            <td><input name="StoreName" maxlength="10"></td>
                        </tr>
                        <tr>
                            <td>超商門市電話(選填)</td>
                            <td><input name="StoreTel" maxlength="12"></td>
                        </tr>
                        <tr>
                            <td>超商門市地址(選填)</td>
                            <td><textarea name="StoreAddr" maxlength="100"></textarea></td>
                        </tr>
                        <tr>
                            <td>超商門市代碼(選填)</td>
                            <td><input name="StoreID" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
            <a href="../">回上一頁</a>
    </div>
</body>

</html>
<?php

// GitHubアカウントのユーザー名とアクセストークンを設定します
$username = 'YourGitHubUsername';
$token = 'YourGitHubAccessToken';

// 招待する組織名を指定します
$organization = 'YourOrganizationName';

// フォームからユーザー名を取得します
if (isset($_POST['invitee'])) {
    $invitee = $_POST['invitee'];

    // APIエンドポイントURLを作成します
    $url = "https://api.github.com/orgs/{$organization}/memberships/{$invitee}";

    // ヘッダー情報を設定します
    $headers = [
        'User-Agent: PHP',
        'Authorization: token ' . $token,
        'Content-Length: 0',
    ];

    // cURLセッションを初期化します
    $ch = curl_init();

    // cURLオプションを設定します
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_PUT, true);

    // APIリクエストを実行します
    $response = curl_exec($ch);

    // HTTPステータスコードを取得します
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // cURLセッションを閉じます
    curl_close($ch);

    // レスポンスを確認します
    if ($httpCode === 200) {
        // 招待が成功した場合の処理
        echo "Invitation sent to {$invitee} for organization {$organization}.";
    } else {
        // 招待が失敗した場合の処理
        echo "Failed to send invitation. Error code: {$httpCode}.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>GitHub Invitation Form</title>
</head>
<body>
    <h1>GitHub Invitation Form</h1>
    <form method="POST" action="">
        <label for="invitee">Invitee's GitHub Username:</label>
        <input type="text" name="invitee" id="invitee" required>
        <br>
        <input type="submit" value="Send Invitation">
    </form>
</body>
</html>

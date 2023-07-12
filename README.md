# Invite_Organization

こののコードでは、$usernameに自分のGitHubのユーザー名、$tokenにアクセストークンを設定します。  
また、$organizationに招待する組織名、$inviteeに招待するユーザーのユーザー名を指定します。  
  
このコードは、cURLを使用してGitHub APIの/orgs/{org}/invitationsエンドポイントにPOSTリクエストを送信します。  
リクエストのヘッダーには、ユーザーエージェント、認証トークン、およびデータのコンテンツタイプが含まれます。データはJSON形式で提供され、invitee_idに招待するユーザーのユーザー名が指定されます。
  
レスポンスが成功した場合は、招待が送信されたことを示すメッセージが表示されます。失敗した場合は、エラーメッセージが表示されます。  

このコードを使用するには、事前にGitHubのアクセストークンを生成し、適切な権限を持つトークンを使用する必要があります。また、招待を送信するためのアカウントは、指定した組織のメンバーである必要があります。  



In this code, you need to set your GitHub username in $username and your access token in $token. Additionally, you need to specify the organization name in $organization and the username of the user to invite in $invitee.

This code uses cURL to send a POST request to the /orgs/{org}/invitations endpoint of the GitHub API. The request headers include the User-Agent, authentication token, and content type of the data. The data is provided in JSON format, with the invitee_id specifying the username of the user to invite.

If the response is successful, a message indicating that the invitation has been sent will be displayed. If it fails, an error message will be displayed.

To use this code, you need to generate an access token in advance from GitHub and use a token with the appropriate permissions. Additionally, the account used to send the invitation must be a member of the specified organization.

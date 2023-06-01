<html>
<body>
<form method="post">
    <h1>Select Provider</h1>
    <input type="radio" name="provider" value="Google" id="providerGoogle">
    <label for="providerGoogle">Google</label><br>
    <input type="radio" name="provider" value="Yahoo" id="providerYahoo">
    <label for="providerYahoo">Yahoo</label><br>
    <input type="radio" name="provider" value="Microsoft" id="providerMicrosoft">
    <label for="providerMicrosoft">Microsoft</label><br>
    <input type="radio" name="provider" value="Azure" id="providerAzure">
    <label for="providerAzure">Azure</label><br>
    <h1>Enter id and secret</h1>
    <p>These details are obtained by setting up an app in your provider's developer console.
    </p>
    <p>ClientId: <input type="text" name="clientId"></p>
<p>
    </p>
<p>ClientSecret: <input type="text" name="clientSecret"></p>
    <p>TenantID (only relevant for Azure): <input type="text" name="tenantId"></p>
    <input type="submit" value="Continue">
</form>
</body>
</html>
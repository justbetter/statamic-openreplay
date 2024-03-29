@if(config('justbetter-openreplay.enabled'))
    @php($configOptions = [
                "projectKey" => config("justbetter-openreplay.token") ?? "",
                "ingestPoint" => config("justbetter-openreplay.url") ?? "",
                "defaultInputMode" => config("justbetter-openreplay.default_input_mode") ?? 0,
                "obscureTextNumbers" => config("justbetter-openreplay.obscure_text_numbers") ? "true" : "false",
                "obscureTextEmails" => config("justbetter-openreplay.obscure_text_emails") ? "true" : "false",
                "__DISABLE_SECURE_MODE" => config("justbetter-openreplay.disable_secure_mode") ? "true" : "false",
                "network" => [
                    "capturePayload" => config("justbetter-openreplay.capture_network") ? "true" : "false"
                ],
    ])
    <script>
        var initOpts = {!! json_encode($configOptions, JSON_UNESCAPED_SLASHES) !!};
        var startOpts = { userID: "" };
        (function(A,s,a,y,e,r){
            r=window.OpenReplay=[e,r,y,[s-1, e]];
            s=document.createElement('script');s.src=A;s.async=!a;
            document.getElementsByTagName('head')[0].appendChild(s);
            r.start=function(v){r.push([0])};
            r.stop=function(v){r.push([1])};
            r.setUserID=function(id){r.push([2,id])};
            r.setUserAnonymousID=function(id){r.push([3,id])};
            r.setMetadata=function(k,v){r.push([4,k,v])};
            r.event=function(k,p,i){r.push([5,k,p,i])};
            r.issue=function(k,p){r.push([6,k,p])};
            r.isActive=function(){return false};
            r.getSessionToken=function(){};
        })("//static.openreplay.com/9.0.0/openreplay.js",1,0,initOpts,startOpts);
    </script>
@endif

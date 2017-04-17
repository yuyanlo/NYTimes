<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
    <TITLE> New Document </TITLE>
    <META NAME="Generator" CONTENT="EditPlus">
    <META NAME="Author" CONTENT="">
    <META NAME="Keywords" CONTENT="">
    <META NAME="Description" CONTENT="">
    <style type="text/css">
        .code{
            margin: 5px;
            padding: 10px;
            border: 1px solid #87BF23;
            background-color: #eee;
            font-size: 12px;
        }
    </style>
    <script type="text/javascript">
        function $(id){
            return document.getElementById(id);
        }

        function getSelectText()
        {
            var txt = null;
            if (window.getSelection){ // mozilla FF
                txt = window.getSelection();
            }else if (document.getSelection){
                txt = document.getSelection();
            }else if (document.selection){ //IE
                txt = document.selection.createRange().text;
            }

            return txt;
        }

        function callAPI(txt) {
            var url = "https://api.nytimes.com/svc/search/v2/articlesearch.json";
            url += '?' + 'api-key=' + "d306567891f44528b129ce3f141317b9";
            url += '&' + 'q=' + txt;
            console.log(url);
            $.ajax({
                url: url,
                method: 'GET',
                dataType: 'json'
            }).done(function(response) {
                if (response.status) {
                    var doc = response.response.docs[0];
                    var newsUrl = doc.web_url;
                    var title = doc.headline.main;
                    document.getElementById('news').innerHTML = "<br />"+title+"<br />"+newsUrl;
                    //console.log(doc);
                }
                console.log(response);
            }).fail(function(err) {
                document.getElementById('news').innerHTML = "<br />"+"找不到新聞"+"<br />";
                throw err;
            });
        }
    </script>

</HEAD>

<BODY>
    <p>效果演示区</p>
    <div class="code" onmouseup="javascript:f()">
        <p>内容开始：As a result, I am pleased to announce a reorganization that will give some of our smaller business units greater scale. It will also allow us to integrate certain activities that we perform today in each unit into a country-wide organization. At the business level, we will consolidate six units into four: Healthcare, Consumer, Enterprise and Telecom (which now integrates Wireless) - all reporting to Sanjay Singh. We will also formalize the position of country heads in India, Ukraine and China - all reporting to Mukul Jain along with select global function heads. To be clear, these changes are not in anticipation of shrinkage but to better position us for growth. This new organization structure will ensure that our units are built around cohesive markets, which is good for our clients. It will also ensure that countries and product engineering centers will operate in a more integrated fashion, which is good for our employees. It will also support the more rapid adoption of global systems and processes. To learn more, please refer to the Re-organization Summary section below.</p>
    </div>
    <p>&nbsp;</p>
    <div id="content" class="code">您选取的内容是:</div>
    <div id="news" class="code">您选取的内容是:</div>
    <script type="text/javascript">
        /*<![CDATA[*/
        function f(){
            var txt = getSelectText();
            if(txt!=null){
                document.getElementById('content').innerHTML = "您选取的内容是:<br />"+txt;
                callAPI(txt);
            }
        } /*]]>*/
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>

    
</BODY>
</HTML>
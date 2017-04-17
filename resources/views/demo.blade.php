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
            //callAPI("123");
            return txt;
        }

        //$("rs_081125").innerHTML = "<p>Call API</p>";
    </script>

</HEAD>

<BODY>
    <p>效果演示区</p>
    <div class="code" onmouseup="javascript:f()">
        <p>内容开始：As a result, I am pleased to announce a reorganization that will give some of our smaller business units greater scale. It will also allow us to integrate certain activities that we perform today in each unit into a country-wide organization. At the business level, we will consolidate six units into four: Healthcare, Consumer, Enterprise and Telecom (which now integrates Wireless) - all reporting to Sanjay Singh. We will also formalize the position of country heads in India, Ukraine and China - all reporting to Mukul Jain along with select global function heads. To be clear, these changes are not in anticipation of shrinkage but to better position us for growth. This new organization structure will ensure that our units are built around cohesive markets, which is good for our clients. It will also ensure that countries and product engineering centers will operate in a more integrated fashion, which is good for our employees. It will also support the more rapid adoption of global systems and processes. To learn more, please refer to the Re-organization Summary section below.</p>
    </div>
    <p>&nbsp;</p>
    <div id="rs_081125" class="code">您选取的内容是:</div>
    <script type="text/javascript">
        /*<![CDATA[*/
        function f(){
            var txt = getSelectText();
            if(txt!=null){
                $("rs_081125").innerHTML="您选取的内容是:<br />"+txt;
                //$("rs_081125").innerHTML+="您选取的内容是:<br />"+txt;
                callapi2(txt);
            }
        } /*]]>*/
        function callapi2(txt) {
            // Built by LucyBot. www.lucybot.com
            var url = "https://api.nytimes.com/svc/search/v2/articlesearch.json";
            url += '?' + $.param({
                        'api-key': "d306567891f44528b129ce3f141317b9",
                        'q': "trump"
                    });
            $.ajax({
                url: url,
                method: 'GET',
            }).done(function(result) {
                console.log(result);
            }).fail(function(err) {
                throw err;
            });
        }
        function callAPI(txt) {
            // Built by LucyBot. www.lucybot.com
            //return "test";
            //$("rs_081125").innerHTML += "<p>"+txt+"</p>";
            /*var url = "https://api.nytimes.com/svc/search/v2/articlesearch.json";
             url += '?' + $.param({
             'api-key': "d306567891f44528b129ce3f141317b9",
             'q': txt
             });*/
            $.ajax({
                url: 'https://api.nytimes.com/svc/search/v2/articlesearch.json',
                data: {
                    'api-key': "d306567891f44528b129ce3f141317b9",
                    'q': txt
                },
                type: 'GET',
                success: function (response) {
                    $("rs_081125").innerHTML += "<p>"+txt+"</p>";
                    //return response;
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    $("rs_081125").innerHTML += "<p>"+txt+"</p>";
                    alert(xhr.status);
                    alert(thrownError);
                    //return response;
                }
            });/*.done(function(result) {
             console.log(result);
             $("rs_081125").innerHTML += "<p>S Call API</p>";
             //return "test2";
             }).fail(function(err) {
             //return "test3";
             //$("rs_081125").innerHTML = "<p>F Call API</p>";
             throw err;
             });*/
        }
    </script>
</BODY>
</HTML>
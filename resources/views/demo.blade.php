<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
    <title data-react-helmet="true" data-reactid="5">法大選反歐派雷朋聲勢高歐盟：不擔心 | 鉅亨網</title>
    <META NAME="Generator" CONTENT="EditPlus">
    <META NAME="Author" CONTENT="">
    <META NAME="Keywords" CONTENT="">
    <META NAME="Description" CONTENT="">
    <body bgcolor="#f1f1f1">
    <style type="text/css">
        .code{
            margin: 15px;
            padding: 15px;
            background-color: #f1f1f1;
        }
    </style>
    <script type="text/javascript">
        function $(id) {
            return document.getElementById(id);
        }

        function getSelectText() {
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
                    document.getElementById('news').innerHTML = "New York Times Search Result:";
                    var doc = response.response.docs;
                    for (key in doc) {
                        var title = doc[key].headline.main;
                        var news = "<a href="+doc[key].web_url+">"+title+"</a>";
                        document.getElementById('news').innerHTML += "<br />"+news+"<br/>";
                    }
                    if (doc.length == 0) {
                        document.getElementById('news').innerHTML += "<br />這個詞沒有搜尋結果<br/>";
                    }
                }
            }).fail(function(err) {
                alert(response);
                document.getElementById('news').innerHTML = "<br />"+"找不到新聞"+"<br />";
                throw err;
            });
        }
    </script>

</HEAD>

<BODY>
    <div class="title"  style="background-color:#ff0000;padding:10px;5">
    <font size = "6" color="white"><p>法大選反歐派雷朋聲勢高歐盟：不擔心</p><font>
    </div>    
    <div class="code" onmouseup="javascript:f()" style="width:720">
        <font size = "4" color="black">
        <p>法國總統大選將在 23 日舉行首輪投票，目前四位候選人纏鬥，中間派馬克宏及極右反歐派的雷朋民調分居一二名。對於第一輪投票結果，歐盟今 (22) 日表示，無論雷朋是否通過第一輪投票，歐盟都不須制定應變計畫。</p>

        <p>法國極右派總統參選人瑪琳．雷朋 (Marine Le Pen) 曾揚言，當選後將辦公投決定是否續留歐盟，雷朋的支持率與馬克宏 (Emmanuel Macron) 接近，在首輪投票出線機率不低。歐盟執委會發言人安德瑞娃 (Mina Andreeva) 表示，目前歐盟認為目前仍不需制定應變計畫。</p>

        <p>安德瑞娃說，法國大選是正常民主國家的運作模式，即使反歐陣營贏得大選，歐盟也足夠強大可以應對。儘管歐盟執委會主席榮科 (Jean-Claude Juncker) 期待挺歐盟陣營勝出，安德瑞娃強調，歐盟絕對尊重法國人民的決定。</p>

        <p>即將舉行首輪投票的法國大選，目前有 4 位候選人民調相近，游移票高達 3 成，讓這場大選成為最難預測結果的一次。根據最新公布的民調顯示，中間派總統候選人馬克宏甩開領先極右派瑪琳．雷朋，領先幅度擴大，贏得首輪投票機率變高。</p>
        <font>
    </div>
    <p>&nbsp;</p>
    <div id="content" class="code" style="width:720"><font size = "4">您選取的內容是:<font></div>
    <div id="news" class="code" style="width:720">New York Times Search Result:</div>
    <script type="text/javascript">
        /*<![CDATA[*/
        function f(){
            var txt = getSelectText();
            if(txt!=null && txt != ''){
                document.getElementById('content').innerHTML = "您選取的內容是:<br />"+txt;
                callAPI(txt);
            }
        } /*]]>*/
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>

    
</BODY>
</HTML>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Convert mAh to Watt hours. Calculate power in watthours from milliamp hour">
<meta name="keywords" content="Convert, mah, watt hours, calculate">
<meta name="author" content="Convert mAh to Watt hours">
<link rel="alternate" hreflang="en" href="https://milliamps-watts.appspot.com/"/>
<link rel="alternate" hreflang="es" href="https://convertir-miliamperios-vatios.appspot.com/"/>
<link rel="alternate" hreflang="fr" href="https://convertir-milliamperes-watts.appspot.com/"/>
<title>Convert mAh to Watt hours</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-H2GV6PCN36"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-H2GV6PCN36');
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>//Page-level ads
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6051400083837233",
    enable_page_level_ads: true
  });
</script>
<style>
div {
	text-align:center;
	margin: 30px;
	font-size:1.3em;
	font-family: Arial, "Times New Roman", Georgia, Serif;
}
input{
	text-align:center;
	font-size:1.3em;
}
.divinput{
	display: inline-block;
	font-size:1em;
	margin: 5px 2px 5px 0px;
}

.header {
	margin-right: 40px; margin-top: 10px;margin-bottom: 0px;text-align:right; 
}
.calcular {
	font-size:1.3em;
	margin-right: 10px;
}
.units {
	font-weight: bold;
	margin-right: 10px;
}
.lower {
	margin-top: 40px;
}
.upper {
	margin-top: 0px;
}
.ad {
	margin: 40px;
}
.feedback{text-align:right;font-size:1em}
</style>
</head>
<body>
<div class="header" >
	<a href="https://convertir-miliamperios-vatios.appspot.com">Espa&ntilde;ol</a>
	<a href="https://convertir-milliamperes-watts.appspot.com/">Français</a>
</div>	
<div>
<h2 class="upper">
	<span>Convert mAh to Watt hours</span>
</h2>	
</div>
<div>
	<span>Insert milliamp hour (mAh) and voltage (V) and click on Calculate to obtain Watt hours (Wh).</span>
</div>	
<div>
	<div class="divinput"><input size="8" id="mAh" type="text" name="mAh"> <span class="units">mAh</span> </div>
	<div class="divinput"><input size="8" id="volts" type="text" name="V"> <span class="units">V</span> </div>
	<div class="divinput"><input type="submit" value="Calculate" onclick="convert();"></div>	
	<div class="divinput">	<input size="8" id="watts" type="text" name="Wh"> <span class="units">Wh</span> </div>
</div>
<div>
	<span> Formula is (mAh)*(V)/1000 = (Wh).</span>
	<span> For example, if you have a 300mAh battery rated at 5V, the power is 300mAh * 5V / 1000 = 1.5Wh.</span>
</div>	
<div class="ad">
<!-- milliamps-watts-Medium-Rectangle -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-6051400083837233"
     data-ad-slot="7733823641"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	
</div>	
<div>
<h2 id="inv" class="lower">
	<span>Convert Watt hours to mAh </span>
</h2>	
</div>
<div>
	<span>Insert Watts-hour (Wh) and voltage (V) and click on Calculate to obtain milliamp-hours (mAh).</span>
</div>	
<div>
	<div class="divinput"><input size="8" id="watts2" type="text" name="Wh"> <span class="units">Wh</span></div>
	<div class="divinput"><input size="8" id="volts2" type="text" name="V"> <span class="units">V</span></div>
	<div class="divinput"><input type="submit" value="Calculate" onclick="convert2();"></div>	
	<div class="divinput"><input size="8" id="mAh2" type="text" name="mAh"> <span class="units">mAh</span></div>
</div>
<div>
	<span> Formula is (Wh)*1000/(V) =(mAh).</span>
	<span> For example, if you have a 1.5Wh battery rated at 5V, the power is 1.5Wh * 1000 / 5V = 300mAh.</span>
</div>	
<div class="ad">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- milliamps-watts-Responsive2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6051400083837233"
     data-ad-slot="4540011644"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>



</div>
<div>
	<p><a href="https://convert-formula.com/">Other Conversions</a></p>
</div>
<div class=feedback><p>Got feedback? email: <a href="mailto:suggestionsfeed@gmail.com?Subject=Convert-kwh-hp">suggestionsfeed@gmail.com</a></p></div><div class=ad></div>
<script  type="text/javascript">
	function convert(){
		a=document.getElementById("mAh").value;
		aContainsComma=a.includes(",");
		aContainsDot=a.includes(".");	
		if (aContainsComma){
			//alert("contains commma");
			a=a.replace(/,/g , ".");
		}		
		b=document.getElementById("volts").value;
		bContainsComma=b.includes(",");
		bContainsDot=b.includes(".");	
		if (bContainsComma){
			//alert("contains commma");
			b=b.replace(/,/g , ".");
		}
		c=a*b/1000;
		c=c.toString();
		if ((aContainsComma)||(bContainsComma)){
			c=c.replace(/\./g , ",");
		}		
		document.getElementById("watts").value=c;	
	}
	function convert2(){
		a=document.getElementById("watts2").value;
		aContainsComma=a.includes(",");
		aContainsDot=a.includes(".");	
		if (aContainsComma){
			//alert("contains commma");
			a=a.replace(/,/g , ".");
		}	
		b=document.getElementById("volts2").value;
		bContainsComma=b.includes(",");
		bContainsDot=b.includes(".");	
		if (bContainsComma){
			//alert("contains commma");
			b=b.replace(/,/g , ".");
		}
		c=1000*a/b;
		c=c.toString();
		if ((aContainsComma)||(bContainsComma)){
			c=c.replace(/\./g , ",");
		}	
		document.getElementById("mAh2").value=c;	
	}
</script>
<script>
  ///Google Analytics////////
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35951944-2', 'auto');
  ga('send', 'pageview');
  ///////////////////
</script>
</body>
</html>
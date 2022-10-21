<div id="loading_gif" style="
position:fixed !important;
z-index:999999 !important;
width:100% !important;
height:100% !important;
background-color: #ffffff !important;
top:0 !important;
left:0 !important;
">
    <div style="
    position:fixed !important;
    width:100% !important;
    height:100% !important;
    background-color: #ffffff !important;
    top:50% !important;
    left:50% !important;
    margin-left:-400px !important;
    margin-top:-200px !important;
    background-size:cover !important;
    width:800px !important;
    height:284px !important;
    background-image: url('images/loading.gif') !important;
    background-position:center center !important;
    background-repeat:no-repeat !important;
    z-index:9999999 !important;
    "></div>
</div>

<style>
    html, body {
        background-image: url("images/background.jpg") !important;
        background-position:center center !important;
        background-repeat:no-repeat !important;
        background-size:cover !important;
    }
</style>

<div id="capture" style="width:800px !important;height:208px !important;">
  <table border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
          <td style="width:400px;">
              <img src="images/bg.png" style="width:400px;">
          </td>
          <td style="width:380px;text-align:right;">
              <p style="font-family: Arial, Helvetica, sans-serif;font-weight:bold;font-size:20px;line-height: 22px;color:#dc1f26;padding: 0px;margin: 0px;text-transform: uppercase;"><?php echo $_POST['ad_soyad']; ?></p>
              <p style="font-family: Arial, Helvetica, sans-serif;font-weight:bold;font-size:18px;line-height: 22px;color:#231f20;padding: 0px;margin: 0px;"><?php echo $_POST['unvan']; ?></p>
              <p style="font-family: Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;color:#231f20;padding: 0px;margin: 0px;margin-top:10px;"><?php echo $_POST['adres']; ?> <br> <?php echo $_POST['ilce']; ?> | <?php echo $_POST['il']; ?></p>
              <p style="font-family: Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;color:#231f20;padding: 0px;margin: 0px;margin-top:10px;">
              Tel: <?php echo $_POST['telefon']; ?> <br>
              Fax: <?php echo $_POST['fax']; ?> <br>
              <a href="mailto:<?php echo $_POST['email']; ?>" style="font-family: Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;color:#231f20;padding: 0px;margin: 0px;margin-top:10px;text-decoration: none;font-weight: bold;"><?php echo $_POST['email']; ?></a>
              </p>
          </td>
      </tr>
    </tbody>
  </table>
</div>

<img src="" id="indir" style="display:block !important;margin:0 auto !important;margin-top:200px !important;border:1px solid gray !important;">
<a href="" id="download" target="_blank" style="display: block !important; margin: 0 auto !important; width: 100px !important; padding: 10px 20px !important; background-color: #dc1f26; text-align: center !important; color: #ffffff !important; text-decoration: none !important; font-size: 18px !important; margin-top: 40px !important;font-family: Arial, Helvetica, sans-serif;-webkit-border-radius: 1px; -moz-border-radius: 1px; border-radius: 1px;-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75); -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75); box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);" download>İNDİR</a>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="js/html2canvas.js"></script>
<script>
    
    html2canvas(document.querySelector("#capture"), {
        scale: 1,
    }).then(canvas => {
        var dataURL = canvas.toDataURL();
        $.ajax({
            type: "POST",
            url: "save.php",
            data: { 
                imgBase64: dataURL
            }
        }).done(function(o) {
            $('#indir').attr('src', 'files/'+o+'.png');
            $('#download').attr('href', 'files/'+o+'.png');
        });
    });

    setTimeout(function(){
        $("#capture").hide();
        $("#loading_gif").delay(1000).fadeOut(500);
    }, 0);
</script>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>CE export</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="https://www.knowledgecoop.com/"><img style="width: 100px;" src="https://cdn.shopify.com/s/files/1/1311/0223/t/12/assets/logo.png?17657271550225039941"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li ><a href="/">Upload Form <span class="sr-only">(current)</span></a></li>
          <li><a href="/export">Exports</a></li>
          <li class="active"><a href="/sigmaker">Email Signature Maker</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.1/vue.js"></script>


<div id="app">
<div class="container">

<div class="col-lg-4 col-lg-offset-4">
  <div class="" id="" style="max-width:470px;margin:8px 8px 8px 0px">
    <table border="0" cellspacing="0" cellpadding="0" width="470" style="width:470px">
      <tbody>
        <tr valign="top">
          <td style="padding-left:10px;width:10px;padding-right:10px"><img :src="photo" width="65" height="65" alt="photo" style="border-radius:0px;width:65px;height:65px;max-width:120px" class=""></td>
          <td style="border-right:1px solid rgb(69,102,142)"></td>
          <td style="text-align:initial;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:14px;line-height:normal;font-family:Arial;color:rgb(100,100,100);padding:0px 10px"><div> <b class="">@{{name}}</b><br>
              <span>@{{title}}</span>, <span>The Knowledge Coop</span> </div>
            <div style="color:rgb(141,141,141);font-size:13px;padding:5px 0px"> <span href="tel:P:%20360.342.6176" style="color:rgb(141,141,141);text-decoration:none" target="_blank">P: (360) 342-6176</a> <span style="color:rgb(69,102,142);display:inline-block">|</span> <span style="display:inline-block"><span style="color:rgb(141,141,141);text-decoration:none" target="_blank">C: @{{ cellphone }}</span></span> <span style="color:rgb(69,102,142);display:inline-block">|</span> <span style="display:inline-block"><span style="color:rgb(141,141,141);text-decoration:none" target="_blank">@{{email}}</span></span> <span style="color:rgb(69,102,142);display:inline-block">|</span> <span style="white-space:nowrap;display:inline-block"><a href="http://www.knowledgecoop.com" style="color:rgb(141,141,141);text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://www.knowledgecoop.com">www.knowledgecoop.com</a></span> <span style="color:rgb(69,102,142);display:inline-block">|</span> <span style="color:rgb(141,141,141);display:inline-block">1902 SE 6th Ave, Camas, WA 98607</span> </div>
            <div style="margin-top:5px">
              <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr style="padding-top:10px">
                    <td align="left" style="padding-right:5px;text-align:center"><a href="http://www.facebook.com/KnowledgeCoop/" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://www.facebook.com/KnowledgeCoop/&amp;source=gmail&amp;ust=1500391051066000&amp;usg=AFQjCNE0RiqbZSSJkUC_tPB_QgFx8URm3A"><img style="border-radius:0px;border:0px;width:16px;height:16px" width="16" height="16" src="https://ci6.googleusercontent.com/proxy/lr4mEgbwLStffR-tRGPaGfv9ec2Peeoamn05dOg-AVm-ax87qzrs8mT98G846F3f-jE6msTtJDhPNgEswwibojBmKyEP52ObOGTSnXw-Zxe2eggR8OliU5Wpz2Hqgwx0PcNbjg=s0-d-e1-ft#https://s3.amazonaws.com/images.wisestamp.com/social_icons/square/facebook.png" class=""></a></td>
                    <td align="left" style="padding-right:5px;text-align:center"><a href="https://www.linkedin.com/company-beta/3493420/" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://www.linkedin.com/in/nathanknottingham/&amp;source=gmail&amp;ust=1500391051066000&amp;usg=AFQjCNG2j_-YAnPG_rxK4NLHeCB9zMHILQ"><img style="border-radius:0px;border:0px;width:16px;height:16px" width="16" height="16" src="https://ci4.googleusercontent.com/proxy/Rhpbc4YyA8lplvt9ktAQ082jq86c5-8-DvQmx7lEYM-ohgABk6y1kW2dIHNoefsWvslp5Tqf8rWZNYIFCL0G1qVarqvRcM0UlVfWRCyj18Ai111i-pO6-6fp7xkseYAePegK7w=s0-d-e1-ft#https://s3.amazonaws.com/images.wisestamp.com/social_icons/square/linkedin.png" class=""></a></td>
                    <td align="left" style="padding-right:5px;text-align:center"><a href="http://twitter.com/knowledgecooper" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://twitter.com/knowledgecooper&amp;source=gmail&amp;ust=1500391051066000&amp;usg=AFQjCNFn9QdZ1XpxSiScZVcjVctTzohMgw"><img style="border-radius:0px;border:0px;width:16px;height:16px" width="16" height="16" src="https://ci4.googleusercontent.com/proxy/5HcrrQign_L6v3gfn0XR-6VrtyTu4iNkO7lodA4tLevchYzwUurqtPx5R7dlmUH95boxgB3zeMFBviwji5LMGobcVi6W43RYXB-lJHL_jjvBrM7J1PSuYLeXD5bJJq5ogwUq=s0-d-e1-ft#https://s3.amazonaws.com/images.wisestamp.com/social_icons/square/twitter.png" class=""></a></td>
                    <td align="left" style="padding-right:5px;text-align:center"><a href="http://instagram.com/knowledgecooper" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://instagram.com/knowledgecooper&amp;source=gmail&amp;ust=1500391051066000&amp;usg=AFQjCNFbPQDmS3t3RVnR7J7lKLJSQybY-g"><img style="border-radius:0px;border:0px;width:16px;height:16px" width="16" height="16" src="https://ci3.googleusercontent.com/proxy/KHdfVUhcatuzSnuDoNnIKhh0Egg8Ujs0RwXFAthYxqTACy2kcFWpoogYr48nixiXgVg4czAiSzt5A-vBOApK986cb5sKo2VFoDIyNdT0b2woJwgAw-yT-VY8j0dIiM9ZBOGBCFs=s0-d-e1-ft#https://s3.amazonaws.com/images.wisestamp.com/social_icons/square/instagram.png" class=""></a></td>
                    <td align="left" style="padding-right:5px;text-align:center"><a href="http://www.youtube.com/channel/UCYZQRELKTZNrNt24Aj5PRsw" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://www.youtube.com/channel/UCYZQRELKTZNrNt24Aj5PRsw&amp;source=gmail&amp;ust=1500391051066000&amp;usg=AFQjCNEQ5l7eKNFciYaLUzDtfGCh9UIxnQ"><img style="border-radius:0px;border:0px;width:16px;height:16px" width="16" height="16" src="https://ci3.googleusercontent.com/proxy/vHt-fl4wGMkZ9Ztr9N0MNHYRQt5NhQu6CaNaAi0fTFznv3dUhqyrgnJ-7HKWPPGzPia-_NPlAgXKKPwwz_38xAYovgajt_Ikge_yGIWZHbzElmFhmc361kXDz8RU4Zeu00DM=s0-d-e1-ft#https://s3.amazonaws.com/images.wisestamp.com/social_icons/square/youtube.png" class=""></a></td>
                  </tr>
                </tbody>
              </table>
            </div></td>
        </tr>
      </tbody>
    </table>

  <br/>
  <br/>
<p style="
    font-size: 8px;
">LEGAL NOTE: @{{ name }} is not an attorney. Any information provided in this email is not to be taken as legal advice. This is not a sales solicitation, but if you feel violated by an email, then just reply with “Remove” and I will never email you again.
</p>
<p style="
    font-size: 8px;
">CONFIDENTIALITY NOTICE: The information transmitted, including attachments, is intended only for the person(s) or entity to which it is addressed and may contain confidential and/or privileged material. Any review, retransmission, dissemination or other use of, or taking of any action in reliance upon this information by persons or entities other than the intended recipients is prohibited. If you received this in error, please contact the sender and destroy any copies of this information.
</p>
<p style="
    font-size: 8px;
">FEEDBACK: If you’d like to share feedback with us or have an issue that you need assistance with please email us at feedback@knowledgecoop.com and we’ll make sure to follow up with you. We value our clients and always appreciate hearing from you.</p>


  </div>
</div>
</div>


<hr/>





<div class="container">

<form class="form-horizontal">
<fieldset>
<!-- Form Name -->
<legend>Email Signature builder</legend>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="photo">Photo</label>
  <div class="col-md-4">
  <input v-model='photo' id="photo" name="photo" type="text" placeholder="" class="form-control input-md">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>
  <div class="col-md-4">
  <input v-model='name' id="name" name="name" type="text" placeholder="John Smith" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cellphone">Cellphone</label>
  <div class="col-md-4">
  <input v-model='cellphone' id="phone" name="phone" type="text" placeholder="867.5309" class="form-control input-md">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title</label>
  <div class="col-md-4">
  <input v-model='title' id="title" name="title" type="text" placeholder="CEO" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-4">
  <input v-model='email' id="email" name="email" type="text" placeholder="ceo@bossco.com" class="form-control input-md">
  </div>
</div>

</fieldset>
</form>

</div>
</div>


<div class="col-lg-4 col-lg-offset-4">
<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UzdVseciZwA" allowfullscreen></iframe>
</div>

</div>



<script>


new Vue({



el: '#app',
data : {
  photo: 'https://ci5.googleusercontent.com/proxy/U1-xvjpEnpKfIjdk7d9k4Lmp1lwiuGGj-V8iC7VTQBEIz1zqYdQAPTTQS_e1_4gUE4W5pRfEczFtyeNUhUwCr0vw12LMHDi3l15u6ks5Cbv-MlQ7EBjODw0I6VDPIVqjpBeOxRJ0smaMpb83H7PcPpmHEJ1z9ZxY5myqsumtyVhkz_vQItQxAenz92QyqGqIiB6qAXILxBEgxg=s0-d-e1-ft#https://s3.amazonaws.com/ucwebapp.wisestamp.com/4e90a30a-8160-4b33-ac03-0bb973400bb0/3903_clipped_rev_22.format_png.resize_200x.png',
  name: 'Nathan Knottingham',
  cellphone:'503.949.7517',
  title:'EVP of Training and Development',
  email:'nathan@knowledgecoop.com',
}
});



</script>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

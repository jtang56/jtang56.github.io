<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CHRISTMAS IS HERE</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="website.css">
        <script src="website.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <div class="jumbotron">
            <h1 align = "center" id = "main_head">JEREMY'S WISHLIST</h1> 
            <p></p> 
        </div>
    </head>
    <body>
        <?php
            function write_file()
            {
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
                    $ip = $_SERVER['REMOTE_ADDR'];
                }

                $myFile = "data.txt";
                $fh = fopen($myFile, 'w') or die("can't open file");
                fwrite($fh, $ip);
                fclose($fh);
            }
        ?>
        <div class="row" align = "center" id = "first_div">
            <div class="col-md-4" id = "input">
                <a href = "http://www.bhphotovideo.com/c/product/279582-USA/Canon_8806A002_EF_17_40mm_f_4L_USM.html" target="_blank">
                    <img src = "http://static.bhphoto.com/images/images500x500/1445360805000_279582.jpg" alt = "Canon 17-40mm" onmouseover="square_bigImg(this)" onmouseout="square_normalImg(this)" width="256" height="256" title = "Canon 17-40mm f/4L $699.99">
                </a>
            </div>
            <div class="col-md-4" id = "input">
                <a href = "http://www.bhphotovideo.com/c/product/162614-USA/Canon_2512A002_Wide_Angle_EF_35mm.html" target="_blank">
                    <img src = "http://static.bhphoto.com/images/images500x500/1266532327000_162614.jpg" alt = "Canon 35mm 1.4" onmouseover="square_bigImg(this)" onmouseout="square_normalImg(this)" width="256" height="256" title = "Canon 35mm f/1.4L $1099.99">
                </a>
            </div>
            <div class="col-md-4" id = "input">
                <a href = "http://www.bhphotovideo.com/c/product/457680-USA/Canon_1257B002AA_Normal_EF_50mm_f_1_2L.html" target="_blank">
                    <img src = "http://static.bhphoto.com/images/multiple_images/images500x500/1445870363000_IMG_150750.jpg" alt = "Canon 50mm 1.2" onmouseover="square_bigImg(this)" onmouseout="square_normalImg(this)" width="256" height="256" title = "Canon 50mm f/1.2L $1399.99">
                </a>
            </div>
        </div>
        <!-- second div -->
        <div class="row" align = "center" id = "second_div">
            <div class="col-md-4" id = "input">
                <a href = "http://www.amazon.com/gp/product/B00ZDNNRB8?ref_=cm_sw_r_awd_Ags2vb72JTE7Z" target="_blank">
                    <img src = "http://ecx.images-amazon.com/images/I/31O7kGYGMBL.jpg" alt = "Xbox One Elite Controller" onmouseover="this.width='450'; this.height='350'" onmouseout="this.width='350'; this.height='256'" width= "350" height = "256" title = "Xbox One Elite Controller $149.99">
                </a>
            </div>
            <div class="col-md-4" id = "input">
                <a href = "http://www.bhphotovideo.com/c/product/162614-USA/Canon_2512A002_Wide_Angle_EF_35mm.html" target="_blank">
                    <img src = "http://static.bhphoto.com/images/images500x500/1266532327000_162614.jpg" alt = "Canon 35mm 1.4" onmouseover="square_bigImg(this)" onmouseout="square_normalImg(this)" width="256" height="256" title = "Canon 35mm f/1.4L $1099.99">
                </a>
            </div>
            <div class="col-md-4" id = "input">
                <a href = "http://www.bhphotovideo.com/c/product/457680-USA/Canon_1257B002AA_Normal_EF_50mm_f_1_2L.html" target="_blank">
                    <img src = "http://static.bhphoto.com/images/multiple_images/images500x500/1445870363000_IMG_150750.jpg" alt = "Canon 50mm 1.2" onmouseover="square_bigImg(this)" onmouseout="square_normalImg(this)" width="256" height="256" title = "Canon 50mm f/1.2L $1399.99">
                </a>
            </div>
        </div>
        <!-- third div -->
        <div class="row" align = "center" id = "third_div">
            <div class="col-md-4" id = "input">
                <a href = "http://www.bhphotovideo.com/c/product/279582-USA/Canon_8806A002_EF_17_40mm_f_4L_USM.html" target="_blank">
                    <img src = "http://static.bhphoto.com/images/images500x500/1445360805000_279582.jpg" alt = "Canon 17-40mm" onmouseover="square_bigImg(this)" onmouseout="square_normalImg(this)" width="256" height="256" title = "Canon 17-40mm f/4L $699.99">
                </a>
            </div>
            <div class="col-md-4" id = "input">
                <a href = "http://www.bhphotovideo.com/c/product/162614-USA/Canon_2512A002_Wide_Angle_EF_35mm.html" target="_blank">
                    <img src = "http://static.bhphoto.com/images/images500x500/1266532327000_162614.jpg" alt = "Canon 35mm 1.4" onmouseover="square_bigImg(this)" onmouseout="square_normalImg(this)" width="256" height="256" title = "Canon 35mm f/1.4L $1099.99">
                </a>
            </div>
            <div class="col-md-4" id = "input">
                <a href = "http://www.bhphotovideo.com/c/product/457680-USA/Canon_1257B002AA_Normal_EF_50mm_f_1_2L.html" target="_blank">
                    <img src = "http://static.bhphoto.com/images/multiple_images/images500x500/1445870363000_IMG_150750.jpg" alt = "Canon 50mm 1.2" onmouseover="square_bigImg(this)" onmouseout="square_normalImg(this)" width="256" height="256" title = "Canon 50mm f/1.2L $1399.99">
                </a>
            </div>
        </div>
    </body>
</html>
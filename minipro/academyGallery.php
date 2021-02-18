<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP</title>
    <style>
   
body{
  background-color:#293739;
}
.gallery {
 
  padding: 10px;
  display: flex;
   flex-flow: row wrap;
   justify-content: space-between;
}
.gallery .item  {
  flex-basis: 33.333%;
  padding: 10px;
  overflow: hidden;
  border-radius: 10px;
  cursor: pointer;
}
.gallery .item  img {
  width: 100%;
 
  border-radius: 10px;
}

    </style>
</head>
<body>
<div >

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
<a class="navbar-brand mr-5" href="index.php">Navbar Jenan </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
       <?php
                function menuList($name,$link) {
                echo  ' <li class="nav-item active mr-2 "><a class="nav-link text-info" href='.$link.'>'.$name.'<span class="sr-only">(current)</span></a> </li>';
                }
                $name = array("Home", "Attendance Report Page", "Dashboard page", "Academy Gallery");
                $link=array("index.php","attendanceReportPage.php","dashboardPage.php","academyGallery.php");
                array_map("menuList", $name,$link);
            ?>
    </ul>
  </div>
</nav>

<h1 class="text-center text-light p-5">Academy Gallery</h1>
    <!-- Page Content -->
  
<div class="container">
<div class="row">
   <div class="gallery">
 <?php
                function imageGallery($link,$alt) {
                 echo '<div class="item"><img src="'.$link.'" alt="'.$alt.'" /></div>';
                }
                $alt = array("Coding Academy", "Coding Academy", "Coding Academy", "Coding Academy","Coding Academy", "Coding Academy", "Coding Academy", "Coding Academy","Coding Academy", "Coding Academy", "Coding Academy", "Coding Academy");
                $link=array("https://scontent.famm6-1.fna.fbcdn.net/v/t1.0-9/119570983_375355260518814_4180199557928596141_o.jpg?_nc_cat=106&ccb=2&_nc_sid=730e14&_nc_eui2=AeE9La4luShQSIK8LIPhFJGVb6vXXx9PXWBvq9dfH09dYM5BP5GuZ3dkhL8WWismcj0Ugb0ExelBQCXSMnWxBc-u&_nc_ohc=Hu_ohyDp5ykAX9RyHpn&_nc_ht=scontent.famm6-1.fna&oh=a9d1110529324f98d650ee70a0145b2b&oe=60300928",
                            "https://intaj.net/wp-content/uploads/2020/08/Pic-300x168.jpg",
                            "data:image/jpeg;base64,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",
                            "https://scontent.famm6-1.fna.fbcdn.net/v/t1.0-9/133366365_461213355266337_2532358075125330270_o.png?_nc_cat=103&ccb=2&_nc_sid=730e14&_nc_eui2=AeEfxp0LLe4rAurFUTT7V0xdgkoq7NMxY0aCSirs0zFjRijxsaQ-ENmC-K8KAAArL-UZhwTprE-JlplrOTjdnGDh&_nc_ohc=v8Rs2--Bc84AX8A0PNm&_nc_ht=scontent.famm6-1.fna&oh=3afb0041e4fbcf62e713e08fd445bebc&oe=60312EB4",
                            "https://scontent.famm6-1.fna.fbcdn.net/v/t1.0-9/121032028_394875011900172_3085004873244390746_o.jpg?_nc_cat=106&ccb=2&_nc_sid=730e14&_nc_eui2=AeGFgyhb5HlxNplv4In7Jk2-GzyPADinwdgbPI8AOKfB2EW37Gpcj0VxFbNmwu2NRsTuKz_PVdRKXi7qDgYqqKMD&_nc_ohc=z5_zKm0yiS8AX85S--K&_nc_ht=scontent.famm6-1.fna&oh=3972dcfbe1a1fa728e86c3e35f54d6f0&oe=603128B5",
                            "https://scontent.famm6-1.fna.fbcdn.net/v/t1.0-9/82353200_179111313476544_4564582253098696704_o.jpg?_nc_cat=102&ccb=2&_nc_sid=730e14&_nc_eui2=AeFnF2x-r-Uxkm61FgqttaqHa2JwVSfZvMNrYnBVJ9m8w_6GWAKAdZQahvvEwlmJqu8QjtSOAt7l7JvwR4_d6pmL&_nc_ohc=aTvNGgJDuBEAX_0M7Bi&_nc_ht=scontent.famm6-1.fna&oh=c0d68caa32337e96103abc69f8ebbaf2&oe=6030158E",
                            "https://scontent.famm6-1.fna.fbcdn.net/v/t1.0-9/82353188_179111226809886_1123033991130120192_o.jpg?_nc_cat=109&ccb=2&_nc_sid=730e14&_nc_eui2=AeH17zMfFTnnZ5BlcnaUPUUZ3FTa1VnhvL3cVNrVWeG8vYivVe1nEYEIomFSdAStL9vLtKhuhGmhFj10rkQxlb3p&_nc_ohc=N60KAgd9FQgAX9TGqED&_nc_ht=scontent.famm6-1.fna&oh=2ad60e41df0e57bf8a5cdba7e704e63a&oe=60301670",
                            "https://scontent.famm6-1.fna.fbcdn.net/v/t1.0-9/81870316_175902533797422_8961238908490743808_o.jpg?_nc_cat=104&ccb=2&_nc_sid=730e14&_nc_eui2=AeEtOQBMFahGqPnHGWzuEWE9xphumckqQ3_GmG6ZySpDf4-5hrMDH3AVQfAQZhNvrt8v5vuzQE2NeIx3AaI2QwMS&_nc_ohc=TqeyU46UXwYAX-GVKmz&_nc_ht=scontent.famm6-1.fna&oh=4b6b264cdd1de47d6dda6215a5c9c477&oe=602FE3A6",
                             "data:image/jpeg;base64,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",
                            "https://scontent.famm6-1.fna.fbcdn.net/v/t1.0-9/78356766_160531538667855_481253585187766272_o.jpg?_nc_cat=110&ccb=2&_nc_sid=730e14&_nc_eui2=AeEMVS1F4OIDrZOjWIW8dxLOk08jyKjGcT6TTyPIqMZxPgEYxMG07Ga_T8SRPneCU0vimk7Faps3DpxI6kwvroWx&_nc_ohc=TlwAiVwyL8QAX9fDw-g&_nc_oc=AQltiS_lFv0OfonK601X8bNajnVCvhc2bS3c_I3TfJC4ki8qZ8tnmOYk0Zk9bBjDpV0&_nc_ht=scontent.famm6-1.fna&oh=5e38d4b098ecbaef309078bf6f6eb0df&oe=60320198",
                            "https://khaberni.b-cdn.net/uploads/news_model/2019/07/main_image5d21eb5b38033.jpg",
                          "https://scontent.famm6-1.fna.fbcdn.net/v/t1.0-9/84033145_192699498784392_8346508606010556416_o.jpg?_nc_cat=106&ccb=2&_nc_sid=730e14&_nc_eui2=AeHV4jpNGIki15pK9fp4yWV10KfPDn8hIenQp88OfyEh6fZcQUkojAimG8Sjfx9OsRfXSj5XhiVYYYt09_QxooeZ&_nc_ohc=lbDGgxPhXsAAX9afTId&_nc_ht=scontent.famm6-1.fna&oh=35a259255872844748ec5d36f03af6de&oe=6031F4CF"
                          );

                array_map("imageGallery", $link,$alt);
            ?>


 
</div>

	</div>
</div>


</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
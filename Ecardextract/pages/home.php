<?php
    session_start();
    include("../config/db.php");

    if(@!isset($_SESSION["displaymail"])) {
        header("location: signin.php?youarenotloggedin");
    }
    require_once("../functions/data.php");
    $memid = $_SESSION["id"];
    //print_r($memdata["id"]);

    //print_r($_SESSION);
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no">
      <link rel="stylesheet" href="../assets/css/home.css">
      <link rel="stylesheet" href="../assets/css/loader.css">
      <script src = "../assets/js/jquery.min.js"></script>
      <title>Home</title>
</head>
<body>
      <div class="home-wrapper">
            <audio autoplay id="audios">
                  <source src="../assets/audio/1.mp3" type="audio/mpeg">
            </audio>
            <div class="header">
                  <div class="logo">
                        <div class="svg">                                                                     
                                          <?xml version="1.0" encoding="iso-8859-1"?>
                                          <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                          <svg fill="#292D32" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                                viewBox="0 0 512 512" xml:space="preserve">
                                          <g>
                                                <g>
                                                      <path d="M498.016,187.294L434.087,133.9v-28.215c0-21.481-17.476-38.957-38.957-38.957h-41.466l-65.159-54.421
                                                            C269.65-3.78,242.343-3.778,223.488,12.313l-65.153,54.417H116.87c-21.481,0-38.957,17.476-38.957,38.957v28.213l-63.929,53.395
                                                            C5.334,194.519,0,205.393,0,217.194v244.476c0,27.618,22.469,50.087,50.087,50.087h411.826c27.618,0,50.087-22.469,50.087-50.087
                                                            V217.194C512,205.586,506.817,194.646,498.016,187.294z M434.087,177.406l35.172,29.378l-35.172,29.377V177.406z M244.972,37.876
                                                            c0.055-0.046,0.109-0.091,0.162-0.138c6.295-5.395,15.435-5.396,21.731,0c0.053,0.047,0.108,0.092,0.162,0.138l34.547,28.853
                                                            h-91.149L244.972,37.876z M111.304,141.604c0-0.002,0-0.004,0-0.006v-35.912c0-3.069,2.497-5.565,5.565-5.565h230.717
                                                            c0.004,0,0.009,0,0.012,0c0.003,0,0.007,0,0.01,0h47.521c3.069,0,5.565,2.497,5.565,5.565v35.913c0,0.001,0,0.002,0,0.003V264.05
                                                            L267.028,375.69c-0.056,0.046-0.11,0.092-0.162,0.138c-6.295,5.397-15.435,5.396-21.731,0c-0.053-0.047-0.108-0.092-0.162-0.138
                                                            L111.304,264.049V141.604z M77.913,177.406v58.753l-35.172-29.377L77.913,177.406z M478.609,461.669
                                                            c0,9.206-7.49,16.696-16.696,16.696H50.087c-9.206,0-16.696-7.49-16.696-16.696V242.481l190.096,158.771
                                                            c18.851,16.088,46.154,16.098,65.014,0.01l139.508-116.518c0.003-0.002,0.006-0.004,0.009-0.008l50.591-42.257V461.669z"/>
                                                </g>
                                          </g>
                                          <g>
                                                <g>
                                                      <path d="M333.913,211.425c0-42.961-34.951-77.913-77.913-77.913c-42.961,0-77.913,34.952-77.913,77.913
                                                            c0,39.313,29.273,71.898,67.162,77.154l-7.483,14.966c-1.85,3.701,0.84,8.054,4.978,8.054h26.513c4.137,0,6.827-4.353,4.978-8.054
                                                            l-7.483-14.966C304.641,283.324,333.913,250.738,333.913,211.425z M256,255.947c-24.549,0-44.522-19.972-44.522-44.522
                                                            c0-24.549,19.972-44.522,44.522-44.522c24.549,0,44.522,19.972,44.522,44.522C300.522,235.974,280.549,255.947,256,255.947z"/>
                                                </g>
                                          </g>
                                          </svg>
                        </div>
                        <div class="text">EcardExT</div>
                  </div>
            </div>
            <?php include("../includes/loader.php");?>
            <div class="body">
                  <div class="content">
                        <div class="note">
                              <div class="svg"> 
                              <div class="text">
                                    <p>
                                          <?php
                                          $time = date('H');

                                          if($time < 12) {
                                                echo 'Good morning';
                                          }
                                          elseif($time > 12) {
                                                echo 'Good afternoon';
                                          }
                                          else{
                                                echo 'Good evening';
                                          }
                                          ?>
                                    , <?php echo $memdata["displayname"]; ?></p>
                              </div>                                                                
                                          <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M4.25512 22.2516L17.1465 16.2744L7.93512 7.06299L1.95798 19.9487C1.87226 20.1544 1.54655 20.983 2.43226 21.7716C3.39226 22.623 4.0494 22.3373 4.25512 22.2516Z" fill="url(#paint0_linear)"/>
                                          <path d="M6.64365 9.8457L5.68365 11.9314C5.37508 12.68 10.8494 18.2057 13.9408 17.76L17.1465 16.2743C13.3465 18.0286 6.17508 10.8628 6.64365 9.8457Z" fill="url(#paint1_linear)"/>
                                          <path d="M4.70078 14.0513L4.47793 14.5256L3.72364 16.1484C3.71793 16.7884 7.01507 20.0798 9.07793 20.0113L11.6951 18.7998C8.86078 19.2913 4.37507 14.7427 4.70078 14.0513Z" fill="url(#paint2_linear)"/>
                                          <path d="M2.02075 19.8232C2.29504 20.3718 3.6379 21.7089 4.75218 22.0232L7.5179 20.7432L7.53504 20.7318C5.83218 21.5146 2.95218 18.6118 2.90075 17.9375L2.02075 19.8232Z" fill="url(#paint3_linear)"/>
                                          <path opacity="0.75" d="M4.25512 22.2516L17.1465 16.2744L7.93512 7.06299L1.95798 19.9487C1.87226 20.1544 1.54655 20.983 2.43226 21.7716C3.39226 22.623 4.0494 22.3373 4.25512 22.2516Z" fill="url(#paint4_radial)"/>
                                          <path opacity="0.75" d="M4.25512 22.2516L17.1465 16.2744L7.93512 7.06299L1.95798 19.9487C1.87226 20.1544 1.54655 20.983 2.43226 21.7716C3.39226 22.623 4.0494 22.3373 4.25512 22.2516Z" fill="url(#paint5_radial)"/>
                                          <path d="M12.3409 7.1085C12.1866 7.42278 11.8837 7.4685 11.6609 7.39993L12.0266 6.67421C12.0266 6.67421 12.438 6.76564 12.4495 6.49707L12.4666 6.87421L12.3409 7.1085Z" fill="url(#paint6_linear)"/>
                                          <path d="M13.3638 3.10865C13.3638 3.10865 13.6266 2.98866 13.7923 2.6458C13.9581 2.30294 13.1409 1.65723 13.1409 1.65723L12.7581 2.3258C12.7581 2.3258 13.4038 2.74865 13.2038 2.89151C12.9981 3.03437 13.3638 3.10865 13.3638 3.10865Z" fill="url(#paint7_linear)"/>
                                          <path d="M20.0494 8.60592C20.1694 7.55449 19.4608 7.20591 19.2037 7.23449C19.2037 7.23449 19.1579 6.89163 19.6151 6.78306C19.9179 6.71449 20.6894 7.4002 20.4894 8.17734L20.0494 8.60592Z" fill="url(#paint8_linear)"/>
                                          <path d="M17.2551 16.1945C16.6151 16.8345 14.0322 15.2802 11.4779 12.7317C8.92934 10.1831 7.37506 7.59451 8.01506 6.95451C8.65506 6.31451 11.2379 7.8688 13.7922 10.4174C16.3408 12.9717 17.8893 15.5545 17.2551 16.1945Z" fill="url(#paint9_linear)"/>
                                          <path d="M17.038 15.7714C16.5523 16.2571 14.2323 14.7257 11.8609 12.3486C9.48946 9.97142 7.95232 7.65713 8.43803 7.17142C8.92375 6.68571 11.2437 8.21713 13.6152 10.5943C15.9866 12.9714 17.5237 15.2857 17.038 15.7714Z" fill="url(#paint10_linear)"/>
                                          <path d="M13.7866 2.646C13.7866 2.646 13.4895 3.28028 13.4495 3.34885C13.3009 3.60028 12.8837 3.686 12.1352 3.58314C11.3866 3.48028 11.1695 3.52028 11.1352 3.526C11.1009 3.53743 10.6609 3.18314 10.6609 3.18314L10.7009 2.82314C10.7009 2.82314 10.8037 2.686 11.1466 2.73171C11.758 2.82314 13.558 3.126 13.7866 2.646Z" fill="url(#paint11_linear)"/>
                                          <path d="M15.2723 13.2571C15.8723 12.5714 16.4323 13.1086 16.7865 12.6171L16.1808 12C15.8265 12.4857 15.3123 12.0286 14.678 12.6971L15.2723 13.2571Z" fill="url(#paint12_linear)"/>
                                          <path d="M8.76367 4.93729C9.59224 5.42872 8.8551 6.10301 9.32367 6.48587L9.96939 5.90872C9.50082 5.52587 10.1751 4.86301 9.34653 4.37158L8.76367 4.93729Z" fill="url(#paint13_linear)"/>
                                          <path d="M17.5352 7.47989C17.5581 7.47417 17.5695 7.33703 17.9066 7.09703C18.2438 6.85703 19.0038 7.22846 19.1009 7.2856C19.2038 7.34275 19.1181 8.2856 19.1181 8.2856C19.1181 8.2856 18.1695 7.27417 17.6952 7.50846C17.2209 7.73703 17.5352 7.47989 17.5352 7.47989Z" fill="url(#paint14_linear)"/>
                                          <path d="M17.6608 9.82865C17.6608 9.82865 17.6265 10.2001 17.4551 10.3715C17.1465 10.6744 16.6551 10.2172 16.0322 10.3829C16.0322 10.3829 16.3179 9.65723 16.3465 9.60008C16.3465 9.60008 16.5979 9.4458 16.8551 9.59437C17.1179 9.73722 17.3465 9.78294 17.5065 9.69723C17.6665 9.61151 17.6608 9.82865 17.6608 9.82865Z" fill="url(#paint15_linear)"/>
                                          <path d="M19.335 8.19416C19.335 8.19416 18.7235 8.47416 18.6435 8.51416C18.5635 8.55416 18.3807 7.1313 18.8207 6.98845C19.2664 6.84559 19.5693 6.79416 19.615 6.78845C19.6607 6.77702 18.8493 6.86273 19.335 8.19416Z" fill="#FFBF00"/>
                                          <path d="M17.455 10.3656C17.7065 10.1027 18.0493 9.71417 18.0322 9.60559C17.9522 8.90845 17.3865 7.37131 17.9065 7.09131C17.9065 7.09131 17.4207 7.43417 17.2722 7.53702C17.1236 7.63988 17.015 7.91417 17.0265 8.36559C17.055 9.15417 17.6836 10.1313 17.455 10.3656Z" fill="#FFBF00"/>
                                          <path d="M15.718 4.72559C15.3009 7.65701 12.3923 10.457 12.3923 10.457L12.7866 11.057C12.7866 11.057 15.9523 7.75987 16.358 4.81701L15.718 4.72559Z" fill="url(#paint16_linear)"/>
                                          <path d="M10.3522 3.5029C10.2836 3.62861 10.4836 3.84004 10.9636 4.4229C11.4436 5.00575 12.6894 6.54861 12.3351 7.10861L12.7179 6.32004C12.7179 6.32004 12.7236 5.69147 12.3465 5.08004C11.7522 4.12004 10.6151 3.08576 10.7008 2.82861L10.3522 3.5029Z" fill="url(#paint17_linear)"/>
                                          <path d="M12.9008 12.4227C13.0302 12.4227 13.1351 12.3178 13.1351 12.1884C13.1351 12.059 13.0302 11.9541 12.9008 11.9541C12.7714 11.9541 12.6665 12.059 12.6665 12.1884C12.6665 12.3178 12.7714 12.4227 12.9008 12.4227Z" fill="url(#paint18_linear)"/>
                                          <path d="M16.1637 2.68586C16.2931 2.68586 16.398 2.58096 16.398 2.45157C16.398 2.32218 16.2931 2.21729 16.1637 2.21729C16.0343 2.21729 15.9294 2.32218 15.9294 2.45157C15.9294 2.58096 16.0343 2.68586 16.1637 2.68586Z" fill="url(#paint19_linear)"/>
                                          <path d="M13.9635 6.08576C14.0929 6.08576 14.1978 5.98086 14.1978 5.85147C14.1978 5.72208 14.0929 5.61719 13.9635 5.61719C13.8341 5.61719 13.7292 5.72208 13.7292 5.85147C13.7292 5.98086 13.8341 6.08576 13.9635 6.08576Z" fill="url(#paint20_linear)"/>
                                          <path d="M15.3522 10.3773C15.4816 10.3773 15.5865 10.2724 15.5865 10.143C15.5865 10.0136 15.4816 9.90869 15.3522 9.90869C15.2228 9.90869 15.1179 10.0136 15.1179 10.143C15.1179 10.2724 15.2228 10.3773 15.3522 10.3773Z" fill="url(#paint21_linear)"/>
                                          <path d="M21.3752 9.80597C21.5045 9.80597 21.6094 9.70108 21.6094 9.57169C21.6094 9.4423 21.5045 9.3374 21.3752 9.3374C21.2458 9.3374 21.1409 9.4423 21.1409 9.57169C21.1409 9.70108 21.2458 9.80597 21.3752 9.80597Z" fill="url(#paint22_linear)"/>
                                          <path d="M19.8837 14.7489C20.0131 14.7489 20.118 14.644 20.118 14.5146C20.118 14.3852 20.0131 14.2803 19.8837 14.2803C19.7543 14.2803 19.6494 14.3852 19.6494 14.5146C19.6494 14.644 19.7543 14.7489 19.8837 14.7489Z" fill="url(#paint23_linear)"/>
                                          <path d="M18.9066 11.7313C19.036 11.7313 19.1409 11.6264 19.1409 11.497C19.1409 11.3676 19.036 11.2627 18.9066 11.2627C18.7773 11.2627 18.6724 11.3676 18.6724 11.497C18.6724 11.6264 18.7773 11.7313 18.9066 11.7313Z" fill="url(#paint24_linear)"/>
                                          <path d="M20.1923 5.36603C20.3217 5.36603 20.4266 5.26114 20.4266 5.13174C20.4266 5.00235 20.3217 4.89746 20.1923 4.89746C20.0629 4.89746 19.958 5.00235 19.958 5.13174C19.958 5.26114 20.0629 5.36603 20.1923 5.36603Z" fill="url(#paint25_linear)"/>
                                          <path d="M17.5636 6.13166C17.693 6.13166 17.7979 6.02676 17.7979 5.89737C17.7979 5.76798 17.693 5.66309 17.5636 5.66309C17.4342 5.66309 17.3293 5.76798 17.3293 5.89737C17.3293 6.02676 17.4342 6.13166 17.5636 6.13166Z" fill="url(#paint26_linear)"/>
                                          <path d="M15.5579 15.3887C17.9464 13.4287 21.9921 13.023 21.9921 13.023L22.1236 12.1201C22.1236 12.1201 17.335 12.6915 14.7979 14.8915C15.0721 15.0801 15.3236 15.2458 15.5579 15.3887Z" fill="url(#paint27_linear)"/>
                                          <path d="M9.56372 9.7428C9.72372 9.95995 9.90086 10.1771 10.0894 10.4057C10.598 9.28566 10.4894 8.40566 10.4894 8.40566L9.86658 8.01709C9.92943 8.70852 9.71801 9.37138 9.56372 9.7428Z" fill="url(#paint28_linear)"/>
                                          <defs>
                                          <linearGradient id="paint0_linear" x1="1.20148" y1="8.86316" x2="11.4001" y2="20.9491" gradientUnits="userSpaceOnUse">
                                          <stop offset="0.2544" stop-color="#FBE07A"/>
                                          <stop offset="1" stop-color="#FF40BF"/>
                                          </linearGradient>
                                          <linearGradient id="paint1_linear" x1="6.74404" y1="9.74752" x2="15.2075" y2="18.211" gradientUnits="userSpaceOnUse">
                                          <stop offset="0.2544" stop-color="#9F00E8"/>
                                          <stop offset="1" stop-color="#7000A3"/>
                                          </linearGradient>
                                          <linearGradient id="paint2_linear" x1="4.39814" y1="14.355" x2="10.2679" y2="20.2247" gradientUnits="userSpaceOnUse">
                                          <stop offset="0.2544" stop-color="#9F00E8"/>
                                          <stop offset="1" stop-color="#7000A3"/>
                                          </linearGradient>
                                          <linearGradient id="paint3_linear" x1="2.62378" y1="18.2066" x2="6.33847" y2="21.9213" gradientUnits="userSpaceOnUse">
                                          <stop offset="0.2544" stop-color="#9F00E8"/>
                                          <stop offset="1" stop-color="#7000A3"/>
                                          </linearGradient>
                                          <radialGradient id="paint4_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(6.7277 12.9072) rotate(119.598) scale(5.8548 1.79244)">
                                          <stop stop-color="white" stop-opacity="0.5"/>
                                          <stop offset="1" stop-color="white" stop-opacity="0"/>
                                          </radialGradient>
                                          <radialGradient id="paint5_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(10.842 18.1556) rotate(151.7) scale(9.28098 2.89463)">
                                          <stop stop-color="#440063" stop-opacity="0.75"/>
                                          <stop offset="1" stop-color="#420061" stop-opacity="0"/>
                                          </radialGradient>
                                          <linearGradient id="paint6_linear" x1="12.3842" y1="6.89505" x2="13.7868" y2="6.4471" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#BD2719"/>
                                          <stop offset="1" stop-color="#FF4E0D"/>
                                          </linearGradient>
                                          <linearGradient id="paint7_linear" x1="13.6883" y1="3.41494" x2="13.0603" y2="1.85474" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#BD2719"/>
                                          <stop offset="1" stop-color="#FF4E0D"/>
                                          </linearGradient>
                                          <linearGradient id="paint8_linear" x1="20.673" y1="8.18015" x2="18.3339" y2="6.68133" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FFCB4B"/>
                                          <stop offset="1" stop-color="#E81CA2"/>
                                          </linearGradient>
                                          <linearGradient id="paint9_linear" x1="14.6798" y1="5.1234" x2="9.45348" y2="21.6009" gradientUnits="userSpaceOnUse">
                                          <stop offset="0.2544" stop-color="#FBE07A"/>
                                          <stop offset="1" stop-color="#E81CA2"/>
                                          </linearGradient>
                                          <linearGradient id="paint10_linear" x1="16.3958" y1="8.90559" x2="8.37479" y2="14.5312" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FBE07A"/>
                                          <stop offset="1" stop-color="white"/>
                                          </linearGradient>
                                          <linearGradient id="paint11_linear" x1="9.93945" y1="3.18825" x2="12.53" y2="3.149" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#BD2719"/>
                                          <stop offset="1" stop-color="#FF4E0D"/>
                                          </linearGradient>
                                          <linearGradient id="paint12_linear" x1="16.0375" y1="12.1215" x2="15.4145" y2="13.2393" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FF9214"/>
                                          <stop offset="1" stop-color="#FF4E0D"/>
                                          </linearGradient>
                                          <linearGradient id="paint13_linear" x1="8.75997" y1="3.52942" x2="9.70197" y2="6.2246" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#80DAFE"/>
                                          <stop offset="1" stop-color="#008EE6"/>
                                          </linearGradient>
                                          <linearGradient id="paint14_linear" x1="18.3866" y1="8.76647" x2="18.1709" y2="6.0477" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FFCB4B"/>
                                          <stop offset="1" stop-color="#E81CA2"/>
                                          </linearGradient>
                                          <linearGradient id="paint15_linear" x1="16.1031" y1="9.91257" x2="17.6053" y2="10.1559" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FFCB4B"/>
                                          <stop offset="1" stop-color="#E81CA2"/>
                                          </linearGradient>
                                          <linearGradient id="paint16_linear" x1="15.0708" y1="4.83107" x2="12.8423" y2="14.002" gradientUnits="userSpaceOnUse">
                                          <stop offset="0.2544" stop-color="#E100FF"/>
                                          <stop offset="1" stop-color="#7000A3"/>
                                          </linearGradient>
                                          <linearGradient id="paint17_linear" x1="10.6877" y1="3.3285" x2="12.3362" y2="6.07601" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FF9214"/>
                                          <stop offset="1" stop-color="#FF4E0D"/>
                                          </linearGradient>
                                          <linearGradient id="paint18_linear" x1="12.4527" y1="10.8697" x2="13.3423" y2="13.4864" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FFCB4B"/>
                                          <stop offset="1" stop-color="#E81CA2"/>
                                          </linearGradient>
                                          <linearGradient id="paint19_linear" x1="15.449" y1="1.27981" x2="16.9143" y2="3.68716" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FBE07A"/>
                                          <stop offset="1" stop-color="#E81CA2"/>
                                          </linearGradient>
                                          <linearGradient id="paint20_linear" x1="13.9286" y1="5.72182" x2="14.2949" y2="7.10866" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#80DAFE"/>
                                          <stop offset="1" stop-color="#008EE6"/>
                                          </linearGradient>
                                          <linearGradient id="paint21_linear" x1="15.1943" y1="9.69807" x2="15.4179" y2="10.3378" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#80DAFE"/>
                                          <stop offset="1" stop-color="#008EE6"/>
                                          </linearGradient>
                                          <linearGradient id="paint22_linear" x1="21.5451" y1="9.02475" x2="21.1264" y2="10.3593" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FFCB4B"/>
                                          <stop offset="1" stop-color="#E81CA2"/>
                                          </linearGradient>
                                          <linearGradient id="paint23_linear" x1="19.8147" y1="13.0176" x2="19.9455" y2="15.8698" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FFCB4B"/>
                                          <stop offset="1" stop-color="#E81CA2"/>
                                          </linearGradient>
                                          <linearGradient id="paint24_linear" x1="18.7532" y1="11.0542" x2="18.9767" y2="11.6939" gradientUnits="userSpaceOnUse">
                                          <stop offset="0.2544" stop-color="#9F00E8"/>
                                          <stop offset="1" stop-color="#7000A3"/>
                                          </linearGradient>
                                          <linearGradient id="paint25_linear" x1="20.6471" y1="4.35101" x2="19.7836" y2="5.84252" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#80DAFE"/>
                                          <stop offset="1" stop-color="#008EE6"/>
                                          </linearGradient>
                                          <linearGradient id="paint26_linear" x1="17.5032" y1="5.56494" x2="17.791" y2="7.16112" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FF9214"/>
                                          <stop offset="1" stop-color="#FF4E0D"/>
                                          </linearGradient>
                                          <linearGradient id="paint27_linear" x1="13.1785" y1="13.636" x2="21.5213" y2="13.8074" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#80DAFE"/>
                                          <stop offset="1" stop-color="#008EE6"/>
                                          </linearGradient>
                                          <linearGradient id="paint28_linear" x1="8.5698" y1="12.7079" x2="10.5698" y2="7.73649" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FBE07A"/>
                                          <stop offset="1" stop-color="#E81CA2"/>
                                          </linearGradient>
                                          </defs>
                                          </svg>
                              </div>
                              <div class="text">
                                    <p>To create a card, click the <span>  Add button</span> below.</p>
                              </div>
                        </div>
                        <div class="cc-add-wrapper">
                          <a href="?openccard=open">
                              <div class="cc-add">
                                    <div class="svg">                                        
                                                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Transformed by: SVG Repo Mixer Tools -->
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                      <g fill="none" stroke="#fff" fill-rule="evenodd">
                                                      <path stroke="none" d="m0 0h32v32h-32z"></path>
                                                      <path d="m16.3898122 5c.5522847 0 1 .44771525 1 1 0 .51283584-.3860402.93550716-.8833789.99327227l-.1166211.00672773h-9.85135066c-1.34587545 0-2.44711619 1.04740572-2.53306205 2.37155699l-.00539949.16690455v15.92307696c0 1.3458754 1.04740572 2.4471162 2.37155699 2.533062l.16690455.0053995h15.92307696c1.3458754 0 2.4471162-1.0474057 2.533062-2.371557l.0053995-.1669045v-9.8428603c0-.5522848.4477153-1 1-1 .5128358 0 .9355072.3860402.9932723.8833788l.0067277.1166212v9.8428603c0 2.4349081-1.9174864 4.4219633-4.3248153 4.5335216l-.2136462.0049399h-15.92307696c-2.43490815 0-4.42196336-1.9174864-4.53352169-4.3248153l-.00493985-.2136462v-15.92307696c0-2.43490815 1.9174864-4.42196336 4.32481527-4.53352169l.21364627-.00493985zm9.6101878-4c.5522847 0 1 .44771525 1 1v3h3c.5522847 0 1 .44771525 1 1s-.4477153 1-1 1h-3v3c0 .5522847-.4477153 1-1 1s-1-.4477153-1-1v-3h-3c-.5522847 0-1-.44771525-1-1s.4477153-1 1-1h3v-3c0-.55228475.4477153-1 1-1z" fill="#fff" fill-rule="nonzero"></path>
                                                      </g>
                                                </svg>
                                    </div>
                                    <div class="text">Create a card</div>
                              </div>
                          </a>
                        </div>

                  <?php
                        if(isset($_GET['openccard'])) {
                            if($_GET['openccard'] == 'open') {
                               
                  ?>
                                 
                              <script>window.location.href ="createcard.php";</script>
                                
                  <?php
                            }
                        }
                  ?>


                  </div>
            </div>
            <?php include("../includes/bottomtab.php");?>
            <?php include("../includes/footpage.php");?>
      </div>
</body>
</html>
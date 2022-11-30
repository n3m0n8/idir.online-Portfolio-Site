<?php
require_once '*****************/autoload.php';
require_once '*****************/config.php';
 
session_start();

if (!empty($_SESSION['_contact_form_error'])) {
    $error = $_SESSION['_contact_form_error'];
    unset($_SESSION['_contact_form_error']);
}

if (!empty($_SESSION['_contact_form_success'])) {
    $success = true;
    unset($_SESSION['_contact_form_success']);
}

?>
<!DOCTYPE html>
<html lang='en' xmlns ='http://www.w3.org/1999/xhtml'>
<head>
    <title>Idir Ouahes | Full-Stack Developer</title>
    <link rel="icon" type="image/x-icon" href="assets/graphics/symbols/idiroLogo.png">
    <link rel="stylesheet" href="styles/idir.dev_styles.css">
    <meta charset="utf-8">
    <meta name='Description' content='Idir is a full-stack developer. Welcome to his portfolio webpage demonstrating his work.'>
    <meta application name="Idir portfolio site">
    <meta name=theme-color content=#F9F9F9> 
    <meta pagename='Portfolio' content='Web programmer portfolio webpage for potential clients and employers.'>
    <meta name='keywords' content='Idir, Ouahes, Web Development, Full-Stack, Developer, Websites, Portfolio, Programmer, Web Designer, Web Design'>
    <meta name='subject' content='Programming'>
    <meta name='summary' content='This is a portfolio site for a full-stack web-developer'>
    <meta name='owner' content='Idir Ouahes'>
    <meta name='topic' content='Coding'>
    <meta name='revised' content='Tuesday, October 4th, 2022, 20:43 pm'>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>The Portfolio Webpage for Idir Ouahes, a full stack web developer.</title>
</head>
<!--noscript tag -->    
<noscript class="noscript">This page can work without Javascript but it is optimised when Javascript is enabled.If you want, navigate to your browser settings and enable Javascript. Otherwise take the more secure approach and read the page like it's 1993</noscript>
<!--Header Title and Sidebars -->    
    <header>
<!--Left-SideBar & Navigation -->    
        <span class="side-bar-container">
                <span class="language-container">
                    <img class="language-selector" onclick="langSelector()" src="https://lh3.googleusercontent.com/u/0/drive-viewer/AFDK6gMcpesGtaArjg4T7e9HqEYps67obOLf4k6QvlrjFGzgp3IWskCMPZZA9IjhZnTqUJAds2pQvg9SAAG543Xd1xo1uQmb3w=w1367-h591">
                    <div class="language-banner" id="langBanner">
                        <a href='index.php'><img alt='View this page in English' class="language-icons" src="assets/images/logos/flags/en.png"></a>
                        <a href='indexES.php'><img alt='View this page in Spanish' class="language-icons" src="assets/images/logos/flags/es.png"></a> 
                        <a href='indexFR.php'><img alt='View this page in French' class="language-icons" src="assets/images/logos/flags/fr.png"></a> 
                        <a href='indexPT.php'><img alt='View this page in Portuguese' class="language-icons" src="assets/images/logos/flags/pt.png"></a> 
                    </div>
                </span>
            <span class="navbar-container">     
            <table class="navbar-table">
                <th class="navbar-text">
                    <p><a href="#welcome">Welcome</a><br></p>
                    <p><a href="#about">About</a><br></p>
                    <p><a href="#samples">Samples</a><br></p>
                    <p><a href="#mycv">C.V.<br></p>
                    <p><a href="#skills">Skills</a><br></p>
                    <p><a href="#contact">Contact</a></p>
                </th>
                <th>
                    <img class="navbar-trigger" id="navTrigger"src="assets/images/btns/mesh1.png">
                </th>
            </table>
            </span>
            <span class="socials-logos-container">
                    <a href="https://uk.linkedin.com/in/idiro" target="_blank">
                        <img class="socials-logos" src="https://lh3.googleusercontent.com/fife/AAbDypDczTNTGdZ5sxKNZPKVvR2diZ74orRySfMYtbLRnBZV9hHdTT5fAM0woP1rWkcolKigOMcv2-tOC-iHvndqRkrFDrfQc9vfDk9wA29Fwk8peVnnV8kt2BNGpdV5_kZhhVXHhgkmvQn_8LR2ikNyMh04vHIhih8dxVh3FF1R1drYyFgWI9C_LxcbFrys-0UDPVeivcGIZr8Qgbdr-cjFZeiwI0iUnbvi_S8cEx1SEdkkZWova1Jd0RwDi8LuN64FGepz3kFxKVhIXm3sS94JjGu8BE_ZhrSr8iafP1q5-LROLQFShGp_NIpvNIUOqRWQEOK2loNQkzwKsrJ4FDn5vdGaKGQGC8L6np9x7D_HLRJzvaTiRc8HugUSlRGXk4xTitIvXB1v7vG4Di1Jd5zibZo5abKczJDfySV-1m8VPUx-bWsC-zhiRzd-9oKtxolaPxgY_UzWqxXLnIlg8nDz3B52-KY4suqvPpPNs56gVjGnjn5xzyY8DpoXuyJ_HaTnKR78Ql5kU6dXjCkOn3HMB7TWhkoV-40KyaqfJIzVAyQZER3ZOvXOeVXwalexD7_QMTDHY-8WTEaFZsPlwUU40h7pFQe_YINdrvldTTePMsnaauyE1yIC4q--H_ZJ2obcEtoI0Mrz3_nweo9JCRheFH9-zaq5M0s99uwg5g-j1NKwNaoAYpkvI2gf9nVGSLFVjHMaUZTX4MQs9pTdUQDZsjBx3SFr3Q4nNIqLtXivfzBccrW1UixSBKDl51QQyCVUGbi6l3ClKDis4i1IL_smQM9aSVyKMxmvMMy6z5ZeI6AVOBxFWzrrMKuR-eumipkBiRmhs4-l_ALix-aROIs7ndQfSxkYeIdI_Vb24tfipRegPDPUenkZRGVjGU7-VrPFFxD5i1gYUEisvsnX2getO3Vrovfg1eG7IGwKBOtAJHIqGUT45FWKs-0X52jSH4wL_1NHyQm5L8wz8dPwWXCczsbsYKyWC8PQyiq_HhNP8vA5reYRMxjgr_G1XbdjvYXhVmQJqyCbYjYnHDUBfuQF1ab-TIcvi2aVk_TwqN89VTF_fDq2PlrqYxAtDu_S95wzHy04rUJu_X3H8xHewGyeU28nQZ3DLd6SUS1GKAq8r6-zY4pI4HpjSvs2yO33u3n1TfZJHeI8VIPsQcLMdHrBlqDrQS7xcL6kS12HXlzmUwMA36fxu7YQ2G8c4vL6sFR3FK6emUMIg-LO5GuctYjGz2GVqtabqHLYkmgyXLIfNS3GYenIgG3NPurYHEtgDaDNuQKCObm7BhJc4ZOXsL8C9icI4HzMVbnEzcMxWMP_ySFnETBT1urFLr5b66-OUlK_R_3tnLRz5GBQTRYJUPBKuQET0_EP6G55Boi-Z1jOybubKH5CTrNVExg4H6YUIROOPVVwoVesHDfqSRDI0podc8-vRGFw4CzrJ8JH7JORdqqndmdh8FzRh5MVomAopt7VlxR6E2efs6Xq0KLU4YDs6g=w1280-h357" alt="Linked In">
                    </a>
                    <a href="https://github.com/n3m0n8" target="_blank">
                        <img class="socials-logos" src="https://lh3.googleusercontent.com/fife/AAbDypATT-RBLPhJYn09g2IUAXH3rZ1WCpez8ed3oIvw7TLIRHAGBhvNNlIh9gY2DKHv6PRuwDKD6pHr4GjGI_Wv9EsccGivZ6tAyFBGFWCToFt9IsiZGn4PnP1aKmiQmLYp8GB_Yd4kR1WnnBBnel6aIq_rD5pREtAQOCf_QzITwGJYEKps8nfxZEU7qQVWl75hABQm4IinRDPrbTTzhZxi5ClPaVnLqmzt7H6DVm3T3NQBpBzMLeO3dtgs-qxTimBTxZjzKiKOaftjTr045A9GSTn6RZQ5yeCbueaoqawilKB8irsiiaDQF55TwVo5vQgw0nUXF8ZYDXAnsoFXJuho0QvE1VogXH3KQ06kLXfeQmvnmCegXHInBV8DcgRwlmB3TT4ri_2MVf6qIqidVzeE8GaaRqCee4MJm7bif1qsMiF_vxA-WnzZZe_Y-DH27VLOruPZMMuiA3aoPvvi8dACskQwMGhXC5m9eN3EbZk5QXVFp80G9wmaCV_BLqG5ZhL9cV0hqDWJNt6_dB-Wl7FVPElt8lI3wYlc9HwOkR9nGN4vmBDHenp24dLuK0kBlRrTJWjozEC1t9jtbSFDOY9COean7u2bTJKOeP-6RnzAVuaiu6KHZgjqsobGh63_dWe9IJAWilfwA6l41Z_LbbIoKSGTcItt1RH9PRzvk-eQYMHDWE_GqZxTumbvemWfvHHwlPnSSzErUHPubFvYUVKyu7wVEvJk9fSqzNlEZTiP5ibnr6dJfORx4SnIgSlVNHUfAetWAja_OqhxII2fc_Clo7kK9s-4_zXCdqFCXvigW7nZjLpR6P8HRx-hxbE9XrTxQwYINJL8Nm7X2Rp1FyfOIxegeB6QJSCzGDxdKq29C6fbrR9KpT2Fz87zE1IoAVfQEPYdVI9C090_f9KkJ29l3NvWKIBt5h85tOGtZsu70YbEEoZQQGE5zLzYf3MF0y3moBobntgrnjpBbRN_a0LwJ9NWdtUDXaV3Qd6B9xM7e8ryhRHuNjIe4CfJ8mw88srbUYy8H3HjJCisN3baPNF11KG7DI8ypnjvrzh2kxuk175d7UtY5gmEmHiYZ0sreOcxrvxwoEXgcSz7GLL6N8Q9XXR9o3zjrsnMhrNdVt3EsrA_OgQNypZaqGqBQLttQ9c5bXpg8AOVVqBf4Y51y1xd7OXr37HvRoLAXKE0mD1tHKAvIJcnXboKF4ige7eix-Pea-rdHu1gdMmlRxg3qsX2vPPee9Pc4Ljv1RERLZWXqqkBXtuq67_6HvW5BibathI2cTyEQbY0aWTUY9_Qa1TFTVtgNGphN-_9W641A1K8q6d94rkIRNyImmiBouelPjJm0PodTvIEH752azXrnVURFsYdkUsj1hxIw6rqwlK2ZKHQ9S_03nyrhosJySCJxYxJyBI9Prg-jB42LTTvoCj5wt_C7JWy96JTRyImWocrnw0uNC9LI2aN0Rv4jsj1ZskjldJaWZnkT4EvAjw6ZtI2-A=w1280-h357" alt="Github">
                    </a> 
                    <a href="https://twitter.com/liberstorian" target="_blank">
                        <img class="socials-logos" src="https://lh3.googleusercontent.com/fife/AAbDypDRa3bKUdNFmnFlDBKl8wGktZ1yJ17MtjHz_JBiJTFnikVaOQ71DwRLzgTZowzn-jCXW-11DDLJA17xCBZ28xWtJp_LmX9NkieSCBrvb3hZ5Ts_v3GipXTCsRZUgBNifhio0TzxzUfpyMHHpkPnlfQGV63LbRy8-bJ8MLehMcjW5izd4bfxic9sf_l_-Z8_TnVFUXbG_LhbEGUpFc9xJVLtV9m_NQxUIZPjHcEBo8OmOhf-hFZFVsBBDOsN-wiONb7vatlX_mBXh5Gdqx7EsoVxW15U81xY8tKpwsbPqUNLgZiPm5UNK7G_c13be5ijOpFhNyvguf3cKBTcY3gIANvsyOGFlsJRobdgvJ_YQ4wQOu6AnC2eMjfCFcRC8d50DZSJtwuUwpWpGj4vGUUXzdSj-twPrL_SFQcGiE35CQkYkXo9cbKAckdq1aDs358M5KZy_piA_9A636AypPOnl8OzPBVkU-9hAeAD1pjYtCpmAMDi2wuC5uXyarX57jjNn6H6GppTk6Tvw7xdcmrZz7Fxii4EmMve399F0A5JnzdB2iRMnv2_Q2EYMKF-IjP68Ccirn-NUWlrKRckiNrO6Z0dlsiZy_ID4peqGemniepfUsCG3LXute8mhYlUSD97VBip7kREbZeiT-mne9XCk20howannxS7AvjWyFmwyqblcJPsi3P6gh2uq34wIVK-fsa7VH9IdE8tZGoLRVxDv2v7HIF9VTOiT-CMomZiUTU_3ZqpoXC6CzXDAsUobE2Xx0CjNpZ-0Gh75KL7WA3n-iSwIfMxflens_q284AWnDc6pH1mQEBIuwr1VGn09Sj_gxhsjgdM-8_e1HPwdPqZ3u_QETIJHMJ-z4BuILC5kGb0Nx1PCzVUVly4Ez8bFw_SO4IppMC1MS9Bzkj_JW7qfboo2hY7rOQCg9a7IYDnt10RhedPjAauFsxp2ss8rdP36RUyFuf3UrN-gbMD9-oqo8O99zRBzCJiSNlnY12FBJUwj1HCeWy1XI005bOIkD0rTS4zi_v7N81r0ZGCwnv2ewOg7fMKYzOnEIWcIaWmC7CA6gbDIa3fgMxMhTX6pCg89Jn02MCCCVxOBfp3d93X4w0Fm8g59uEcs6Hs9Vkd7dNeaATRMks-0j9W2FtBWG9YrKSECjHODfj-yni3kqcXlFidSU_rf7EFie1Kf9rpfc1NPcVJpGy_k33fo4Bg230Mg1C34L7fc6yUCtm4QM71VUf6Z8RxTZCG-IlypWlDKIiABywfP_fLUnnim27m0FlOzFyJcSiEGHjhMakqsGQQ37dT9wi1pfym_UNFdcVlT26esutJn9tQ-C2Jlfj-WmzdqjeKoQ5vVT1GUrpY-lA7ZIxI0djfkF9uvZypz_IPhLl7k0dwBV-bdKUgGYTz9IPnv35Jxh0YUZu7WwOWLb0IkyhYxpSngB-52vbpOuPImdoCrflw40SPNcXbU2-hcEPayRneLy7MgMQsfZCoUUd6eA=w1280-h542" alt="Twitter">
                    </a>
            </span>    
        </span>
    </header>
    <body>
<!--Section 1: Splash Page & Navigation Image -->    
        <section class="body-grid" id="welcome">
            <span class="splash-page-container">
                <h1 class="main-header-h1">
                    IDIR OUAHES — FULL-STACK DEVELOPER
                </h1>
                <!--
                <div class="main-navbar-img" >
                <image height="225" width="450" src="https://lh3.googleusercontent.com/u/0/drive-viewer/AFDK6gM-3yP6crmoEPcTw8QUP4GHJ46b56BhA-mudNdAJ0QzuC0C0LAI659OTXESqGjxSwJUOvgQI4RFVIedKzsU3Nh2Go2cmQ=w1280-h542">
                </image>
                </div> 
                -->
                <h2 class="main-header-h2">
                    Welcome to my portfolio site.
                </h2> 
            </span>            
<!--Section 2: About Me-->
        <span class="separators"></span>          
            <section class="about-container" id="about">
                <div>
                    <h4 class="about-me-header">
                    ABOUT ME
                    </h4>
                        <h5 class="about-me-subheader">I used to be an historian, then I took html to the knee... 
                        </h5>
                            <img src="https://lh3.googleusercontent.com/fife/AAbDypDAjwTJBGpxdz3OW-f_zofhBT8sJv5emnjdmIzru0HinHOVUrzmQ5_OQ04wHR5xin6sqd4CTTkHPuMqHUdheDnrvvi25PHBQINEmcHpgUPdj_ddRCt0aspZgiJ4YgZ5mERhrmdLXksCz6WuW1zJYRGVmg6-OTvYs-spUgEt6UPZwchW11MFD5Ek6QwO2ID3D-QRrVRJnSgN6LFGM7xWzR6lok2K53psICRtxXHI0j2fH5zVsfTTsSefITp0h5hFT0oEiOGzAQTCxSfm6SWHR5ECuuS5401ijicocxrBxAXzs55evKi98cTp0ErKYzpmNsHJsnAlSpBFgmnsGu7YoWvA336T5HwkevwVHaIDtFXSqcGCr8GBUCn7jIUwCPFPX_ie7Y3qNF1Vr8Bl-nnkH3PnNchN5wJwccFy7LsGChEBjlJd1REBmUq3Qu2AbHaOumCWjMRYzVOuCqoKaC0zzJZErQ9GOfVd7X574RU5tUdeJPGBTTwEabTyqPGsVLUWmZSa5xGReWsiZBooFQ_S5N3WbPEJ_v0qxDFQsJiWT88sTpR38COwj0EdTZnlqZgXi-QXXlcSzg16bANcAp_dkS2qB5tcH-1bzpQu0GYnVo_a0brPzoypWPmqEKypfhIBSeLfaf1USqGTt4A_tf60w-VOpD1g4t9AnxEG3ZYjQUk5cxYcVDOdiRDOSJvtsNMBjZ-2yCJkzrT3Ry7hCt6Q0vwu8PM-dDX5_m05wkmf7hKVf-WVqy-WZ4FhLKQZrtBW2iSviRdetMuh2_c1gwpbxm_q8FsfMDjNWvc3PBFyF-ohMMmKuw196n-vaL9iYPMun1lvS7qp3ZlqHYRWusAy8_LrXUuuCGgYLc7NbhTokBepEUjdAE5gLcgN0qigWY3foPEqYF2ZIESLOnZpSwPruVJ_tf2UoZFFi5fDY1jfe26SzZrBCzrJr-OEVL0-w8aD7Hs=w1280-h542" class="iprofile">
                            <p class="about-me-textbox">Hi, I'm Idir. I grew up taking apart computers and playing painfully slow dial-up games. <br> In my 20s I was educated as an historian of the modern Middle East and lectured in history and international relations. I still love history but my initial passion for tech re-emerged a few years ago. 
                            </p>
                            <p class="about-me-textbox"> I started to learn html. I told myself it would take weeks, maybe months to get familiar... but instead I was making a (pretty bad) site with within a day.<br>
                            <br>My learning path focussed primarily on theory while I was still working as a lecturer. The first proper language I started learning was Java, which was a steep learning curve but, in retrospect, really beneficial since it really disciplines you to learn the architectural aspects of computer science (compilation vs. runtime, parsing flow, memory-management, scoping etc...). <br>
                            <br>My next languages were Python and PHP. I found them to be much more fluid than Java. So far, however, PHP is the one that's caught my heart. It is such a fluid and inter-connecting language, powerful and ubiquitous in a scary but awesome way. PHP first allowed me to see the persistences of the interconnection between machines on the internet(s)- and how (almost) all these hosts and servers are fundamentally operating in one space (the web as it used to be more-clearly recognised).<br>
                            <br>Most recently, I've focussed mostly on the front-end side, primarily via Javascript but also with some engagement with Node and JQuery. I hope to learn Angular and improve my basics of databases (SQL, Mongo and Redis) in the coming months. In the medium term I will try to learn the Laravel-Livewire framework/flavour in order to become a PHP-first full-stack (with solid grounding in JS and databases).
                            </br>
                            <br>Below, you will find an outline of my ongoing skills, my portfolio of sample websites as they emerge, my formal C.V. and a contact form.
                            </p>
                </div>
            </section>

<!--Section 3: Samples-->          
        <span class="separators"></span>                  
        <section>
        <!--skills table 1 Front-End--> 
                <h3 class='samples-header' id="samples"> SAMPLES.
                </h3>
                <div class="samples-gallery-container">
                    <table>
                    <tr>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th> &nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                    </tr>
                    <tr>
                        <td class="sample-headline">Mediterranean Matters Newsletter Site. <a class="video-link" href="https://medmatters.infinityfreeapp.com/" target="_blank">VIEW</a>
                        </td>
                        <td> &nbsp&nbsp</td>
                        <td class="sample-headline">Legal Firm Vanilla WordPress site.<a class="video-link" href="http://ribeirosequeira.epizy.com/" target="_blank">VIEW</a>
                        </td>
                    </tr>        
                    <tr>
                        <td class="sample-data">+ Purely Vanilla HTML,CSS, JS and PHP.<br>
                                + Use of fetch api as well as overlaid google translate/
                                weather map/gdpr services.<br>
                                + mysql DB with PHP-PDO objects allowing subscription service.<br>          
                        </td>
                        <td> &nbsp&nbsp</td>
                        <td class="sample-data">+ WordPress child theme with plugins.
                            <br>
                                + Customisation of CSS and functions.php.
                            <br>
                        </td>
                    </tr>
                     <tr>
                        <td class="sample-video" ><iframe src="https://player.vimeo.com/video/773466844?h=8549ef5d09&autoplay=1&loop=1&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </td>
                        <td> &nbsp&nbsp</td>
                        <td class="sample-video" ><iframe src="https://player.vimeo.com/video/775477450?h=b858b4389b&autoplay=1&loop=1&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </td>
                    </tr>
                    </table>
                </div> 
        </section>
<!--Section 4: Interactive C.V -->
        <span class="separators" id="mycv"></span>      
        <section class="cv-container">
            <p class='cv-header'>FULL C.V.</p>
            <br><br> 
            <p>This CV fetches normally with Firefox but Safari/ Google Chrome's security policy blocks fetching without Google 0auth. If it doesn't load for you, see the C.Vs <a href='https://drive.google.com/drive/folders/1yRS7zytWNl35OFtVs_8VqjdnP1tFNfQg?usp=share_link' target="_blank">here</a>.</p>
            <span class=CV-Selector-Container>
                <select>
                    <option>ENGLISH</option>
                    <option id="cvEnW">Day Mode</option>
                    <option id="cvEnB">Night Mode</option>
                </select>
                &nbsp&nbsp
                <select>
                    <option>ESPAÑOL</option>
                    <option id="cvEsW">Versión Diurna</option>
                    <option id="cvEsB">Versión Nocturna</option>
                </select>
                &nbsp&nbsp
                <select>
                    <option>FRANÇAIS</option>
                    <option id="cvFrW">Version Jour</option>
                    <option id="cvFrB">Version Nuit</option>
                </select>
                &nbsp&nbsp
                <select>
                    <option>PORTUGUES</option>
                    <option id="cvPtW">Versão Diurna</option>
                    <option id="cvPtB">Versão Nocturna </option>
                </select>
                &nbsp&nbsp&nbsp
                <button id="fetchCV">FETCH CV</button>
            </span> 
            <span class="cv">
                <iframe id="cv" src="" width="840" height="460" allow="autoplay"></iframe>
            </span>         
        </section> 
        <!--Section 5: Skills-->         
        <span class="separators"></span>        
        <section class="skillz-container" id="skills">
                <p class="skillz-header">Here are my developing skills:</p> 
    <!--skills table 1 Front-End--> 
                <div class="skills-table-header"> Front-End.
                </div>
                <div class="skills-table">
                    <table>
                    <tr>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                    </tr>
                    <tr>
                        <td><img src="assets/images/logos/programming/HTML.png" alt="HTML Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/CSS3.png" alt="CSS Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/js.png" alt="Javascript Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/jquery.png" alt="JQuery Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/typescript.png" alt="TypeScript Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/react.png" alt="React JS Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/tailwind.png" alt="Tailwind CSS Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/livewire.png" alt="Laravel Livewire Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/Angular.png" alt="Angular Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/vue.png" alt="VueJS Logo" class="skills-logos">
                        </td>
                    </tr>        
                    <tr>
                        <td class="skills-table-data">Intermediate level HTML.
                        </td>
                        <td class="skills-table-data">Intermediate level CSS.
                        </td>
                        <td class="skills-table-data">Intermediate level JS.
                        </td>
                        <td class="skills-table-data">Beginner level JQuery.
                        </td>
                        <td class="skills-table-data">Foundations of Typescript.
                        </td>
                        <td class="skills-table-data">Foundations of React.
                        </td>
                        <td class="skills-table-data">Foundations of Tailwind.
                        </td>
                        <td class="skills-table-data">Foundations of Laravel Livewire.
                        </td>
                         <td class="skills-table-data">Foundations of Angular.
                        </td>
                        <td class="skills-table-data">Foundations of VueJS.
                        </td>
                    </tr>
                    </table>
                </div> 
    <!--skills table 2 Back-End--> 
                <div class="skills-table-header"> Back-End.
                </div>  
                <div class="skills-table">
                    <table>
                    <tr>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                    </tr>        
                    <tr>
                        <td><img src="assets/images/logos/programming/Apache-HTTP.png" alt="Apache HTTP Server Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/php.png" alt="PHP Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/node.png" alt="Node JS Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/postman.png" alt="Postman Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/Java.png" alt="Java Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/laravel.png" alt="Laravel Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/CSharp.png" alt="C# Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/mongodb.png" alt="Mongo DB" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/mysql.png" alt="MySQL Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/redis.png" alt="Redis Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/springboot.png" alt="Spring Boot Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/git.jpg" alt="Git Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/python.png" alt="Python Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/xampp.png" alt="XAMPP Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/cpanel.png" alt="CPanel Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/phpMyAd.png" alt="PhpMyAdmin Logo" class="skills-logos">
                        </td>
                    </tr>        
                    <tr>
                        <td class="skills-table-data">Foundations of Apache HTTP-Server.
                        </td>
                        <td class="skills-table-data">Lower-Intermediate level PHP.
                        </td>
                        <td class="skills-table-data">Beginner level Node.
                        </td>
                        <td class="skills-table-data">Foundations of Postman.
                        </td>
                        <td class="skills-table-data">Beginner level Java.
                        </td>
                        <td class="skills-table-data">Foundations of Laravel.
                        </td>
                        <td class="skills-table-data">Beginner level C#.
                        </td>
                        <td class="skills-table-data">Foundations of Mongo.
                        </td>
                        <td class="skills-table-data">Beginner level MySQL
                        </td>
                        <td class="skills-table-data">Foundations of Redis.
                        </td>
                        <td class="skills-table-data">Foundations of Spring Boot.
                        </td>
                        <td class="skills-table-data">Beginner level Git.
                        </td>
                        <td class="skills-table-data">Lower-Intermediate level Python.
                        </td>
                        <td class="skills-table-data">Foundations of XAMPP stack.
                        </td>
                        <td class="skills-table-data">Beginner level CPanel.
                        </td>
                        <td class="skills-table-data">Beginner level PhpMyAdmin.
                        </td>
                    </tr>
                    </table>
                </div>  
    <!--skills table 3 Networking & Security--> 
                <div class="skills-table-header">Networking.
                </div>
                <div class="skills-table">
                    <table>
                    <tr>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                    </tr>
                    <tr>
                        <td><img src="assets/images/logos/programming/bash.png" alt="GNU Bash Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/docker.png" alt="Docker Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/nmap.png" alt="NMap Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/kali.png" alt="Kali OS Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/parrotOS.png" alt="ParrotOS Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/wireshark.png" alt="WireShark Logo" class="skills-logos">
                        </td>
                        <td><img src="assets/images/logos/programming/PacketTracer.png" alt="PacketTracer Logo" class="skills-logos">
                        </td>
                    </tr>        
                    <tr>
                        <td class="skills-table-data">Intermediate level GNU Bash.
                        </td>
                        <td class="skills-table-data">Foundations of Docker.
                        </td>
                        <td class="skills-table-data">Intermediate level NMap.
                        </td>
                        <td class="skills-table-data">Beginner level Kali OS.
                        </td>
                        <td class="skills-table-data">Beginner level ParrotOS.
                        </td>
                        <td class="skills-table-data">Beginner level WireShark.
                        </td>
                        <td class="skills-table-data">Beginner level PacketTracer.
                        </td>
                        <td>
                    </tr>
                    </table>
                </div>                  
        </section>
<!--Section 6: Contact Me-->    
        <span class="separators"></span>              
        <section class="contact-container" id="contact">
            <div>
                <p class="contact-header">CONTACT ME.</p>
                <p>Please fill out the form below if you want to get in touch:
                </p>
            </div>
                <!-- FORM-->
                 <?php
                if (!empty($success)) {
            ?>
                <span class="form-response-container">
                    <div class="form-success">Your message was sent successfully!</div>
                </span>    
            <?php
                }
            ?>
            <?php
                if (!empty($error)) {
            ?>
                <span class="form-response-container">
                    <div class="form-fail"><?= $error ?></div>
                </span>
            <?php
                }
            ?>
            <form  method="POST" class="form" id="commentForm" action="*****************/formHandler.php">
                <label class="form-labels" for="sndrName" aria-label="required">Please enter your name:*
                </label> 
                    <input class='form-labels-box' type="text"  name="sndrName" required pattern="^[A-Za-z .]+$" placeholder="e.g. Adam Jensen">
                <label class="form-labels" for="sndrEmail" aria-label="required"> Please enter your email:*
                </label>
                    <input class='form-labels-box' type="email" minlength="5" placeholder="e.g name@domain.ending" name="sndrEmail" required>
                <label class="form-labels" for="cntctReason" aria-label="required"> Why are you getting in touch?*
                </label>
                    <select class='form-btns' style="cursor:cell"  name="cntctReason">
                        <option>Hiring.
                        </option>
                        <option> Enquiry.
                        </option>
                        <option> Other Reason.
                        </option>
                    </select>
                <label class="form-labels" aria-label="required" for="msgCntnt">Please write your message here:*    
                </label>
                <textarea class="form-text" name="msgCntnt" required>
                </textarea>
<!--Recaptcha-->
<div class="h-captcha" data-sitekey="<?= CONTACTFORM_HCAPTCHA_SITE_KEY ?>" data-theme="dark"></div>
<!--SUBMIT-->    
                <input class='form-btns' type="submit" style="cursor:pointer" value="Send">
            </form>
<!--Script links-->     
<script src="*****************/indexMainScript.js" defer>
</script>
<script src="https://js.hcaptcha.com/1/api.js" async defer></script>
<!-- <script>
    //HCaptcha prevent submission without success:\\
    $("form").submit(function(event) {
        var hcaptchaVal = $('[name=h-captcha-response]').value;
            if (hcaptchaVal === "") {
                event.preventDefault();
                alert("Please complete the hCaptcha");
            }
    });
</script> 
-->
<script src="https://player.vimeo.com/api/player.js"></script>
    </body>
</html>

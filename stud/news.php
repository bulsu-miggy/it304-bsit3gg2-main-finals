<!DOCTYPE html>
<!-- saved from url=(0061)https://preview.colorlib.com/theme/bootstrap/contact-form-16/ -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./Contact Form #6_files/css" rel="stylesheet">
    <link rel="stylesheet" href="./Contact Form #6_files/style.css">

    <link rel="stylesheet" href="./Contact Form #6_files/bootstrap.min.css">

    <link rel="stylesheet" href="./Contact Form #6_files/style(1).css">
    <title>Contact Form #6</title>
    <script defer="" referrerpolicy="origin" src="./Contact Form #6_files/s.js.download"></script>
    <script nonce="714484bf-c3df-432f-acb2-b9154f41fe0b">
        (function(w, d) {
            ! function(cM, cN, cO, cP) {
                cM.zarazData = cM.zarazData || {};
                cM.zarazData.executed = [];
                cM.zaraz = {
                    deferred: [],
                    listeners: []
                };
                cM.zaraz.q = [];
                cM.zaraz._f = function(cQ) {
                    return function() {
                        var cR = Array.prototype.slice.call(arguments);
                        cM.zaraz.q.push({
                            m: cQ,
                            a: cR
                        })
                    }
                };
                for (const cS of ["track", "set", "debug"]) cM.zaraz[cS] = cM.zaraz._f(cS);
                cM.zaraz.init = () => {
                    var cT = cN.getElementsByTagName(cP)[0],
                        cU = cN.createElement(cP),
                        cV = cN.getElementsByTagName("title")[0];
                    cV && (cM.zarazData.t = cN.getElementsByTagName("title")[0].text);
                    cM.zarazData.x = Math.random();
                    cM.zarazData.w = cM.screen.width;
                    cM.zarazData.h = cM.screen.height;
                    cM.zarazData.j = cM.innerHeight;
                    cM.zarazData.e = cM.innerWidth;
                    cM.zarazData.l = cM.location.href;
                    cM.zarazData.r = cN.referrer;
                    cM.zarazData.k = cM.screen.colorDepth;
                    cM.zarazData.n = cN.characterSet;
                    cM.zarazData.o = (new Date).getTimezoneOffset();
                    if (cM.dataLayer)
                        for (const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_, da) => ({
                                ...c_[1],
                                ...da[1]
                            }))))) zaraz.set(cZ[0], cZ[1], {
                            scope: "page"
                        });
                    cM.zarazData.q = [];
                    for (; cM.zaraz.q.length;) {
                        const db = cM.zaraz.q.shift();
                        cM.zarazData.q.push(db)
                    }
                    cU.defer = !0;
                    for (const dc of [localStorage, sessionStorage]) Object.keys(dc || {}).filter((de => de.startsWith("_zaraz_"))).forEach((dd => {
                        try {
                            cM.zarazData["z_" + dd.slice(7)] = JSON.parse(dc.getItem(dd))
                        } catch {
                            cM.zarazData["z_" + dd.slice(7)] = dc.getItem(dd)
                        }
                    }));
                    cU.referrerPolicy = "origin";
                    cU.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));
                    cT.parentNode.insertBefore(cU, cT)
                };
                ["complete", "interactive"].includes(cN.readyState) ? zaraz.init() : cM.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row justify-content-center">
                        <!-- <div class="col-md-6">
                            <h3 class="heading mb-4">Let's talk about everything!</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas debitis, fugit natus?</p>
                            <p><img src="./Contact Form #6_files/undraw-contact.svg" alt="Image" class="img-fluid"></p> 
                        </div> -->
                        <div class="col-md-6">
                            <form class="mb-5" method="post" id="contactForm" name="contactForm" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>
                            <div id="form-message-warning mt-4"></div>
                            <div id="form-message-success">
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./Contact Form #6_files/jquery-3.3.1.min.js.download"></script>
    <script src="./Contact Form #6_files/popper.min.js.download"></script>
    <script src="./Contact Form #6_files/bootstrap.min.js.download"></script>
    <script src="./Contact Form #6_files/jquery.validate.min.js.download"></script>
    <script src="./Contact Form #6_files/main.js.download"></script>
    <script defer="" src="./Contact Form #6_files/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon="{&quot;rayId&quot;:&quot;7773c30ed9c9bc3f&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2022.11.3&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>

</body>

</html>
</html>
<!DOCTYPE html>
<html>
<body>
<h2>My skills</h2>

<p>This is images shows Mordecai perfroming his duties in Multimedia field and Health field.</p>

<button onclick="document.getElementById('myImage').src='m1.jpg'">Mordecai on camera</button>

<img id="myImage" src="pic_bulboff.gif" style="width:100px">

<button onclick="document.getElementById('myImage').src='m2.jpg'">Mordecai wearing lab coat</button>

<!-- contact section-->
    <section id="contact">
        <div class="container mt-3 contactContent">
            <h1 class="text-center">Contact Me</h1>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
					<div style="overflow:hidden;max-width:100%;width:500px;height:500px;">
					<div id="embed-ded-map-canvas" style="height:100%; width:100%;max-width:100%;">
					<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Mzuzu+University,+Luwinga,+Mzuzu,+Malawi&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
					</div><a class="google-map-code-enabler" href="https://www.bootstrapskins.com/themes" id="enable-maps-data">premium bootstrap themes</a><style>
					#embed-ded-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
					
					
                   

                <div class="col-lg-6">
                    <!-- form fields -->
                    <form>
                        <input type="text" class="form-control form-control-lg" placeholder="Name">
                        <input type="email" class="form-control mt-3" placeholder="Email">
                        <input type="text" class="form-control mt-3" placeholder="Subject">
                        <div class="mb-3 mt-3">
                            <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Project Details"></textarea>
                        </div>
                    </form>
                    <button type="button" class="btn btn-success mt-3">Contact Me</button>
                    
                </div>

            </div>
        </div>
    </section>
</body>
</html>
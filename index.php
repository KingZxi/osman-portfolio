<?php 
$typewriter = '';
include 'includes/header.php'; ?>
<div class="divider"></div>
<section class="about-section" id="about">
    <h2>About Me</h2>
    <div class="about-me">
        <div class="about-me__picture">
            <img src="img/profile_placeholder.png" alt="Photo of Osman, aspiring web developer" />
        </div>
        <p class="">
            My name is Osman, I am an aspiring junior web-developer and
            programmer, (I don't really know what else to put here right now, so
            gonna add some placeholder text). In venenatis interdum turpis, quis
            tristique sem bibendum eget. Nunc lobortis pellentesque placerat. In
            faucibus velit at justo tincidunt, quis iaculis ante sagittis. Nam
            viverra, lectus quis lobortis consequat, magna elit pharetra lorem,
            ullamcorper blandit lacus nulla quis enim. Pellentesque nec elit eu
            lorem mattis convallis sed at urna. Donec id vehicula magna. Duis
            suscipit pretium nulla eget fermentum. Aliquam dictum cursus ante
            vel ornare. Suspendisse ut metus sit amet nibh ultrices volutpat.
            Curabitur sit amet sodales tortor. I am Kaisen.
        </p>
        <p class="">
            Suspendisse potenti. Suspendisse blandit urna sem, id euismod nibh
            facilisis consequat. Donec pulvinar faucibus nisl, non placerat est
            consequat non. Duis at lorem et ipsum lobortis semper. Proin
            tincidunt ultrices elementum. Sed lacinia mauris pulvinar, bibendum
            urna nec, vestibulum ex. Proin id accumsan elit, eu pretium urna.
            Duis vehicula erat ac diam hendrerit, in lobortis arcu bibendum. Ut
            id mollis quam. For this was our, Jujutsu Kaisen.
        </p>
        <p class="">
            Nam feugiat ut dolor eu condimentum. Nulla tristique gravida dolor
            imperdiet pretium. Aenean hendrerit tristique dui in convallis. Ut
            bibendum quis tortor eget vehicula. Cras finibus diam enim, vel
            accumsan sem ullamcorper in. Vivamus dapibus erat interdum turpis
            mattis, sed porta tortor bibendum. Sed erat nunc, malesuada id velit
            sed, sagittis interdum mi. Mauris vestibulum est quis nisl
            facilisis, sit amet commodo justo malesuada. Nulla non molestie
            diam, vitae dapibus nisl. Pellentesque habitant morbi tristique
            senectus et netus et malesuada fames ac turpis egestas. Read Jujutsu
            Kaisen.
        </p>
        <a href="#projects">
            <div class="next-button">
                <span class="next-button__text">Next Section</span>
                <span class="icon-arrow-down2"></span>
            </div>
        </a>
    </div>
</section>
<div class="divider"></div>
<section class="projects-section" id="projects">
    <div class="container">
        <h2>Projects</h2>
        <div class="projects">
            <div class="projects__element">
                <div class="projects__element--img">
                    <img src="img/netmatters-cropped.jpeg" alt="Project image" />
                </div>
                <div class="projects__element--info">
                    <h3>Netmatters Mirror</h3>
                    <p>
                        A mirror of the Netmatters website, created using
                        <strong>HTML, CSS, JS</strong>
                        and I plan to soon add some PHP. This project as an assignment
                        to practice and demonstrate my skills in front-end web
                        development.
                    </p>
                    <span>View<span class="icon-arrow-right2"></span></span>
                </div>
            </div>
            <div class="projects__element">
                <div class="projects__element--img">
                    <img src="img/placeholder.png" alt="Project image" />
                </div>
                <div class="projects__element--info">
                    <h3>Javascript Array Project</h3>
                    <p>
                        This is a simple site that allows users to pair an image with
                        their email, I made it as part of a short assessment for
                        Netmatters.
                        <strong>It's created using HTML, CSS and JS.</strong>
                    </p>
                    <span>View<span class="icon-arrow-right2"></span></span>
                </div>
            </div>
            <div class="projects__element">
                <div class="projects__element--img">
                    <img src="img/placeholder.png" alt="Project image" />
                </div>
                <div class="projects__element--info">
                    <h3>GP Registration System (Not Official)</h3>
                    <p>This pro</p>
                    <span>View<span class="icon-arrow-right2"></span></span>
                </div>
            </div>
            <div class="projects__element">
                <div class="projects__element--img">
                    <img src="img/placeholder.png" alt="Project image" />
                </div>
                <div class="projects__element--info">
                    <h3></h3>
                    <p>
                        Basic project description, random placeholder text can go
                        here... This description should be about half the length of
                        the template text.
                    </p>
                    <span>View<span class="icon-arrow-right2"></span></span>
                </div>
            </div>
            <div class="projects__element">
                <div class="projects__element--img">
                    <img src="img/placeholder.png" alt="Project image" />
                </div>
                <div class="projects__element--info">
                    <h3>Project Template</h3>
                    <p>
                        Basic project description, random placeholder text can go
                        here... This description should be about half the length of
                        the template text.
                    </p>
                    <span>View<span class="icon-arrow-right2"></span></span>
                </div>
            </div>
            <div class="projects__element">
                <div class="projects__element--img">
                    <img src="img/placeholder.png" alt="Project image" />
                </div>
                <div class="projects__element--info">
                    <h3>Project Template</h3>
                    <p>
                        Basic project description, random placeholder text can go
                        here... This description should be about half the length of
                        the template text.
                    </p>
                    <span>View<span class="icon-arrow-right2"></span></span>
                </div>
            </div>
        </div>
        <a href="#contact">
            <div class="next-button">
                <span class="next-button__text">Next Section</span>
                <span class="icon-arrow-down2"></span>
            </div>
        </a>
    </div>
</section>
<div class="divider"></div>
<section class="contact-section" id="contact">
    <h2>Contact:</h2>
    <div class="contact__error">
    </div>
    <div class="contact">
        <form class="contact__form" id="contact" action="php/form-submission.php">
            <!-- This form is to include a first name, last name, email address, subject, and message area (which is a textbox) -->
            <div class=" contact__form__field">
                <label for="first-name">First name:</label>
                <input id="first-name" name="first-name" type="text" placeholder="Enter your first name" />
            </div>
            <div class="contact__form__field">
                <label for="last-name">Last name:</label>
                <input id="last-name" name="last-name" type="text" placeholder="Enter your last name" />
            </div>
            <div class="contact__form__field">
                <label for="email">Email Address:</label>
                <input id="email" name="email" type="email" placeholder="Enter your email address" />
            </div>
            <div class="contact__form__field">
                <label for="phone-number">Phone Number: <small>(Optional)</small></label>
                <input id="phone-number" name="phone-number" type="tel"
                    placeholder="Enter your phone number (optional)" />
            </div>
            <div class="contact__form__field">
                <label for="message">Message:</label>
                <textarea id="message" name="message"> </textarea>
                <!-- placeholder="Enter your message here" -->
            </div>
            <button type="submit" class="contact__form__btn" id="submit">Submit</button>
            <!-- I plan to add submission functionality through JS later -->
        </form>
    </div>
</section>
<div class="divider"></div>
<?php include 'includes/footer.php'; ?>
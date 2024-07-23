<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio website for Charan, showcasing projects, education,Achievement and contact information.">
    <meta name="keywords" content="Portfolio, Web Design, Projects, Charan, Contact">
    <title>Charan's Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js">
    <link rel="stylesheet" href="stu.css">
</head>
<body>
    <div class="hero-header">
        <div class="wrapper">
            <header>
                <div class="logo">
                    <i class="fas fa-user"></i>
                    <div class="logo-text">Charan</div>
                </div>
                <div class="togglebtn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav>
                    <ul class="navlinks">
                        <li><a href="#">Home</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#education">Education</a></li>
                        <li><a href="#achievements">Intenship</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </header>

            <div class="container">
                <div class="hero-text">
                    <h5>Hello, my name is</h5>
                    <h1>Charan</h1>
                    <p>And I'm a <span class="input"></span></p>
                    <img src="pic.jpg" alt="Charan's Picture">
                    <div class="btn-group">
                        <button class="btn" onclick="window.open('file:///C:/Users/Harish/Downloads/MY%20resume.pdf')">Download Resume</button>

                        <button class="btn">Hire Me</button>
                    </div>
                    <div class="social">
                        <a href="https://www.linkedin.com/in/charan-naik-charan/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="projects">
        <div class="wrapper">
            <h2>Projects</h2>
            <div class="project-cards">
                <div class="card">
                    <img src="https://5.imimg.com/data5/EN/AG/PS/SELLER-73014895/restaurant-management-system-500x500.jpg" alt="Restaurant Management System">
                    <h3>Restaurant Management System</h3>
                    <p>Take orders online through the website.</p>
                </div>
                <div class="card">
                    <img src="https://electronicpay.in/wp-content/uploads/2019/01/Card-Management-System.jpg" alt="Credit Card Validity Checker">
                    <h3>Credit Card Validity Checker</h3>
                    <p>Verify if a credit card is valid or not.</p>
                </div>
                <div class="card">
                    <img src="https://miro.medium.com/v2/resize:fit:800/1*VtAozzg_xdDzbuEQEDJB4A.jpeg" alt="Online Ticket Booking">
                    <h3>Online Ticket Booking</h3>
                    <p>Book tickets online easily.</p>
                </div>
                <div class="card">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.7JXjgE51a4zMVjBRgP63hQHaFW&pid=Api&P=0&h=180" alt="bill reminder ">
                    <h3>Bill reminder </h3>
                    <p>it will show the due date of the bill</p>
                </div>
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBnNuDZ-Ai4PNvz_y97XQ8L8iFs5ymYHVBZ7QNQl3q7f3XngA3GxrzA8UB3yu42_8rG5Q&usqp=CAU" alt="shopping management">
                    <h3>shopping management </h3>
                    <p>it shows what item u buy </p>
                </div>
            </div>
        </div>
    </section>

    <section id="education">
        <div class="wrapper">
            <h2>Education</h2>
            <div class="education-cards">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRE0wThjvotruHckaBcwwIuWqobO6mugKeCRUWCCTGzxIeaCXSPjlREV5RrcCfbx_C8hmE&usqp=CAU" alt="Image 1">
                    <h3>Nehru Nikethan High School</h3>
                    <p>Till 2020 <u></u></p>
                </div>
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPxdRPixoEM82JwlWWK4RVhX5wDm29tA88zA&s" alt="Image 2">
                    <h3>Sri Chaitanya Junior College</h3>
                    <p>Till 2022 <u</u></p>
                </div>
                <div class="card">
                    <img src="data:image/jpeg;base64,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pBcqFXsvfay71dExSArAjcWc8iD0MkfDOD10vZYCz227fEtsOXbaMKOQAVR/ZUAczymwOOpgH2iTsfsRE0EREBERAREQEREBERAx7PFydvh49M5z9+J8/XfqvxaZUQMX679V+LR9d+q/FplRAxfrv1X4tH136r8WmVEDF+u/Vfi0fXfqvxaZUQIr2r0+qtrKVDD1Bbqym4Br62DVpnGCDggg/wBoH0nw+r1xv3Kty1eLpMVtWmBUyn6SGO3d5TjmD8siS2JnxFa6zhuruVnvqsa59NSr4rXAuTVB2RMDmoXmCScgdczeVHXtYtZstRfF1Sm3wayfCBB07MNmOfMcgPjz5yXRHiI32f1Wra+walHWk15QOq5Fni2hlyg/u/C5c/gTzmh0HBtVXp7L6vFr1CNq1qpVB51s1G+s2biQ4CY2jA2hiOvSwojxEUvt1yahEQ221b6t1jVoA1bm7cCFXIK5pBPI+XOPtTT6eviAsOoNT+O2m0iXEonJhqHOoSoDk22tsrnOfcmWHEeP+iIO2v3qj5upZGWw+CKm6WkOVwwYEeGpXKNkZA5kD27EVamtFpvVxWml0QQOqjbcEK31gqOYXCdc9Tgn0lMR49hERNBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQERED//Z" alt="shopping m">
                    <h3> SRM AP  </h3>
                    <p>B.tech 2026 <u</u> </p>
                </div>
    
            </div>
        </div>
    </section>
    <section id="achievements">
        <div class="wrapper">
            <h2>Intenship</h2>
            <div class="achievement-cards">
                <div class="card">
                    <h3>JP morgan Intenship   </h3>
                    <img src="jp morgan .jpg" alt="jp ">
                    <p>"Proudly completing my internship journey at JPMORGAN Company! 🌱🎓</p>
                </div>
                <div class="card">
                    <h3>walmart intenship  </h3>
                    <img src="walmart.jpg" alt="wall">
                    <p>Thrilled to have successfully concluded my internship with Walmart Company! 🛒🌟 </p>
                </div>
                <div class="card">
                    <h3>TCS communication skills    </h3>
                    <img src="tcs.jpg" alt="tcs ">
                    <p>i have improved my communication skills by tcs  </p>
                </div>
                <div class="card">
                    <h3>guvi intenship  </h3>
                    <img src="GuviCertification -.png" alt="wall">
                    <p>Ready to use my new Python skills to take my career to the next level! </p>
                </div>
                <div class="card">
                    <h3>guvi AI intenship  </h3>
                    <img src="GuviCertification - 91sD717h621mf66TY9.png" alt="wall">
                    <p> Ai india 2.0 has successfully completed </p>
                </div>
                
            </div>
        </div>
    </section>
    
    
    <section id="contact">
            <h2>Contact</h2>
            <form>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn">Send</button>
            </form>
        </div>
    </section>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

    var togglebtn = document.querySelector(".togglebtn");
    var nav = document.querySelector(".navlinks");

    togglebtn.addEventListener("click", function () {
        this.classList.toggle("click");
        nav.classList.toggle("open");
    });

   
    var typed = new Typed(".input", {
        strings: ["Web Developer", "Designer", "Freelancer"],
        typeSpeed: 70,
        backSpeed: 55,
        loop: true
    });

    
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".navlinks li a");

    window.addEventListener("scroll", () => {
        let current = "";

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - sectionHeight / 3) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href").includes(current)) {
                link.classList.add("active");
            }
        });
    });
});

    </script>
</body>
</html>

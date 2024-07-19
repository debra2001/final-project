<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
    </head>
      <body>
        
     
    <main>
  <section class="card">
    <!-- cube img -->
    <img src="https://raw.githubusercontent.com/MizAndhre/FAQ-accordion-card/2ff2a02d093554f14d0390a409e825669313a16e/images/illustration-box-desktop.svg" alt="Box" class="card__box" />
    <!-- Images -->
    <div class="card__img">
      <!-- mobile -->
      <img class="card__img-mobile" src="https://raw.githubusercontent.com/MizAndhre/FAQ-accordion-card/2ff2a02d093554f14d0390a409e825669313a16e/images/illustration-woman-online-mobile.svg" alt="Woman online Mobile" />
      <!-- desktop -->
      <img class="card__img-desktop" src="https://raw.githubusercontent.com/MizAndhre/FAQ-accordion-card/2ff2a02d093554f14d0390a409e825669313a16e/images/illustration-woman-online-desktop.svg" alt="Woman online desktop" />
    </div>

    <!-- Text -->
    <div class="card__text">
      <h1>FAQ</h1>

      <div class="accordion">
        <!-- item 1 -->
        <div class="accordion__item">
          <button class="accordion__title">
          What is the purpose of this technical support system?
          </button>

          <div class="accordion__collapse collapse">
            <div class="accordion__text">
              <p>The purpose of this technical support system is to provide users with efficient and effective assistance for any technical issues they encounter. It allows users to submit support requests, track their progress, and receive expert help in resolving their problems.</p>
            </div>
          </div>
        </div>
        <!-- item 2 -->
        <div class="accordion__item">
          <button class="accordion__title">
          How do I submit a technical support request?
          </button>

          <div class="accordion__collapse collapse">
            <div class="accordion__text">
            To submit a technical support request, log in to your account, navigate to the "Support Center" page, and fill out the support request form with the necessary details about your issue. Once submitted, your request will be reviewed and assigned to a suitable expert.
            </div>
          </div>
        </div>
        <!-- item 3 -->
        <div class="accordion__item">
          <button class="accordion__title">
          How can I provide feedback on the support I received?
          </button>

          <div class="accordion__collapse collapse">
            <div class="accordion__text">
            log in to your account and navigate to the "Feedback" section to rate the support you received and leave any comments.
            </div>
          </div>
        </div>
        <!-- item 4 -->
        <div class="accordion__item">
          <button class="accordion__title">
          Can I track the status of my support request?
          </button>

          <div class="accordion__collapse collapse">
            <div class="accordion__text">
            Yes, you can track the status of your support request by logging into your account and navigating to the "Support Center" page. There, you will see a list of your submitted requests and their current statuses.
            </div>
          </div>
        </div>
        <!-- item 5 -->
        <div class="accordion__item">
          <button class="accordion__title">
          What should I do if I do not receive a response to my support request?
          </button>

          <div class="accordion__collapse collapse">
            <div class="accordion__text">
            If you do not receive a response within the expected timeframe, you can follow up by checking the status of your request in the "Support Center" or contacting our support team directly for an update.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


      
<style>
     @import url("https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap");

:root {
  --textBlue: hsl(238, 29%, 16%);
  --textRed: hsl(14, 88%, 65%);
  --textVeryDarkBlue: hsl(237, 12%, 33%);
  --textDarkBlue: hsl(240, 6%, 50%);
  --gradientViolet: hsl(273, 75%, 66%);
  --gradientBlue: hsl(240, 73%, 65%);
  --dividerGray: hsl(240, 5%, 91%);
}

html {
  box-sizing: border-box;
  font-size: 62.5%;
}

*,
*::after,
*::before {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  font-family: "Kumbh Sans", sans-serif;
  font-size: 1.2rem;
  font-weight: 400;
  background: linear-gradient(var(--gradientViolet), var(--gradientBlue));
}

main {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.card {
  background-color: #fff;
  border-radius: 2.5rem;
  min-width: 33rem;
  max-width: 92rem;
  margin: 0 2.5rem 6rem;
  padding: 0 2.3rem 4.8rem;
  background-image: url("https://raw.githubusercontent.com/MizAndhre/FAQ-accordion-card/2ff2a02d093554f14d0390a409e825669313a16e/images/bg-pattern-mobile.svg");
  background-repeat: no-repeat;
  background-position: top center;
  background-size: 24rem;
}

.card__box {
  display: none;
}

.card__img {
  position: relative;
}

.card__img-mobile {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%) translateY(-60%);
  display: block;
  width: 100%;
  height: auto;
  max-width: 24rem;
}

.card__img-desktop {
  display: none;
}

.card__text {
  margin-top: 12.9rem;
}

h1 {
  margin: 0;
  padding-bottom: 1.5rem;
  font-size: 3.3rem;
  font-weight: 700;
  text-align: center;
  color: var(--textBlue);
}

.accordion__item {
  border-bottom: 0.1rem solid var(--dividerGray);
}

.accordion__item h2 {
  margin: 0;
}

.accordion__title {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  padding: 1.45rem 0.5rem;
  border: none;
  background: none;
  font-family: "Kumbh Sans", sans-serif;
  font-size: 1.4rem;
  color: var(--textVeryDarkBlue);
  text-align: left;
  transition: all 300ms ease-in-out;
}

.accordion__title:focus,
.accordion__title:focus-visible {
  z-index: 3;
  outline: solid rgba(255, 146, 113, 0.5);
  box-shadow: 0 0 0.4rem 0.4rem rgba(161, 72, 45, 0.25);
  border-radius: 0.3rem;
}

.accordion__title:hover {
  cursor: pointer;
  color: var(--textRed);
}

.accordion__title::after {
  content: "";
  display: block;
  width: 1rem;
  height: 0.6rem;
  background-image: url("https://raw.githubusercontent.com/MizAndhre/FAQ-accordion-card/2ff2a02d093554f14d0390a409e825669313a16e/images/icon-arrow-down.svg");
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  transition: transform 300ms ease-in-out;
}

.accordion__text {
  text-align: left;
  padding: 0.5rem 3rem 2.2rem 0.5rem;
  line-height: 1.5;
  color: var(--textDarkBlue);
}

/* JS Classes */
.accordion__title.open {
  font-weight: 700;
  color: var(--textBlue);
}

.accordion__title.open::after {
  transform: rotate(180deg);
}

.accordion__collapse.collapse {
  display: none;
}

.accordion__collapse.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 1s ease;
}

.accordion__collapse.open {
  display: block;
}

/* DESKTOP STYLE */
@media (min-width: 56em) {
  .card {
    position: relative;
    display: flex;
    padding: 6.1rem 9.4rem 8.4rem 0;
    margin: 0;
    background-image: url("https://raw.githubusercontent.com/MizAndhre/FAQ-accordion-card/2ff2a02d093554f14d0390a409e825669313a16e/images/bg-pattern-desktop.svg");
    background-size: 100%;
    /* background-position: -73rem center; */
    background-position: -53rem -28rem;
  }

  .card__box {
    display: block;
    position: absolute;
    z-index: 1;
    top: 57%;
    left: 0;
    transform: translateX(-50%) translateY(-50%);
  }

  .card__img,
  .card__text {
    flex: 1;
  }

  .card__img {
    display: flex;
    align-items: center;
    overflow: hidden;
    padding-right: 9.2rem;
  }

  .card__img-mobile {
    display: none;
  }

  .card__img-desktop {
    display: block;
    max-width: 47.2rem;
    transform: translateX(-8.4rem);
  }

  .card__text {
    margin-top: 0;
  }

  h1 {
    padding-bottom: 2.1rem;
    text-align: left;
  }

  .accordion__title {
    font-size: 1.5rem;
  }

  .accordion__text {
    line-height: 1.4;
    padding: 0.5rem 3rem 2rem 0.5rem;
  }
}
</style>

<script>const accordionBtns = document.querySelectorAll(".accordion__title");

accordionBtns.forEach((button) => {
  button.addEventListener("click", (event) => {
    let accCollapse = button.nextElementSibling;

    if (!button.classList.contains("collapsing")) {
      // open accordion item
      if (!button.classList.contains("open")) {
        accCollapse.style.display = "block";
        let accHeight = accCollapse.clientHeight;

        setTimeout(() => {
          accCollapse.style.height = accHeight + "px";
          accCollapse.style.display = "";
        }, 1);

        accCollapse.classList = "accordion__collapse collapsing";

        setTimeout(() => {
          accCollapse.classList = "accordion__collapse collapse open";
        }, 300);
      }
      //close accordion item
      else {
        accCollapse.classList = "accordion__collapse collapsing";

        setTimeout(() => {
          accCollapse.style.height = "0px";
        }, 1);

        setTimeout(() => {
          accCollapse.classList = "accordion__collapse collapse";
          accCollapse.style.height = "";
        }, 300);
      }

      button.classList.toggle("open");
    }
  });
});</script>

    
</body>
</html>
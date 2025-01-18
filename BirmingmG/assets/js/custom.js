document.addEventListener('DOMContentLoaded', function() {
    const slidrs = document.querySelectorAll('.slidr');
    const cards = document.querySelectorAll('.card.width');
    let currentSlide = 0;
    let slideInterval;

    function isLargeScreen() {
        return window.innerWidth > 670;
    }

    function startSlideInterval() {
        slideInterval = setInterval(function() {
            if (currentSlide < cards.length - (isLargeScreen() ? 3 : 1)) {
                currentSlide++;
            } else {
                currentSlide = 0;
            }
            updateSlideDisplay();
        }, 5000);
    }

    function stopSlideInterval() {
        clearInterval(slideInterval);
    }

    function updateSlideDisplay() {
        slidrs.forEach(function(slidr, index) {
            if (index >= currentSlide && index < currentSlide + (isLargeScreen() ? 1 : 1)) {
                slidr.classList.add('black');
            } else {
                slidr.classList.remove('black');
            }
        });
    
        hideCards();
    
        const start = currentSlide;
        const end = start + (isLargeScreen() ? 3 : 1);
        showCards(start, end);
    }
    

    if (isLargeScreen()) {
        hideCards();
        showCards(0, 3);
    } else {
        hideCards();
        showCards(0, 1);
    }

    startSlideInterval();

    window.addEventListener('resize', function() {
        if (isLargeScreen()) {
          
            hideCards();
            showCards(0, 3);
        } else {
            console.log('mobile');
            hideCards();
            showCards(0, 1);
        }
        updateSlideDisplay();
    });

    slidrs.forEach(function(slidr, index) {
        slidr.addEventListener('click', function() {
            stopSlideInterval();
            currentSlide = index;
            updateSlideDisplay();
            startSlideInterval();
        });
    });

    function hideCards() {
        cards.forEach(function(card) {
            card.style.display = 'none';
        });
    }

    function showCards(start, end) {
        for (let i = start; i < end && i < cards.length; i++) {
            cards[i].style.display = 'flex';
        }
    }









     // Check if the pagination element exists
     const pagination = document.querySelector('.pagination');
     if (pagination) {
       const articles = document.querySelectorAll('.inside-article');
       const perPage = 2;
       const totalPages = Math.ceil(articles.length / perPage);
       let currentPage = 1;
 
       function showPage(page) {
         const startIndex = (page - 1) * perPage;
         const endIndex = startIndex + perPage;
 
         articles.forEach((article, index) => {
           if (index >= startIndex && index < endIndex) {
             article.style.display = 'block';
           } else {
             article.style.display = 'none';
           }
         });
       }
 
       // Initially show the first page
       showPage(currentPage);
 
       // Previous Button
       const prevButton = document.createElement('li');
       const prevLink = document.createElement('a');
       prevLink.classList.add('page-link');
       prevLink.href = '#';
       prevLink.textContent = 'Previous';
       prevButton.appendChild(prevLink);
       pagination.appendChild(prevButton);
 
       prevLink.addEventListener('click', function (event) {
         event.preventDefault();
         if (currentPage > 1) {
           currentPage--;
           showPage(currentPage);
         }
       });
 
       // Page numbers
       for (let i = 1; i <= totalPages; i++) {
         const li = document.createElement('li');
         const a = document.createElement('a');
         a.classList.add('page-link');
         a.href = '#';
         a.textContent = i;
         a.addEventListener('click', function (event) {
           event.preventDefault();
           currentPage = i;
           showPage(i);
         });
         li.appendChild(a);
         pagination.appendChild(li);
       }
 
       // Next Button
       const nextButton = document.createElement('li');
       const nextLink = document.createElement('a');
       nextLink.classList.add('page-link');
       nextLink.href = '#';
       nextLink.textContent = 'Next';
       nextButton.appendChild(nextLink);
       pagination.appendChild(nextButton);
 
       nextLink.addEventListener('click', function (event) {
         event.preventDefault();
         if (currentPage < totalPages) {
           currentPage++;
           showPage(currentPage);
         }
       });
     }



});






$(document).ready(function(){
    $("#toggleButton").click(function(){
        var $mobileresp = $('.mobileresp');
        if($mobileresp.hasClass('mobile-display')){
            $mobileresp.removeClass('mobile-display');
        } else {
            $mobileresp.addClass('mobile-display');
        }
    });      

    $("#contact-form").submit(function (e) {
        e.preventDefault();
        $("#auto-response").slideToggle("slow").delay(7000).slideToggle(1500);
        $("#contact-form")[0].reset();
    });

});













const reviewCards = document.querySelectorAll('.reviewcard');
if (reviewCards) {
  let currentPage = 0;
  const cardsPerPage = 4;

  const prevLink = document.getElementById('prevLink');
  const nextLink = document.getElementById('nextLink');
  const buttonContainer = document.getElementById('buttonContainer');

  // Function to show the next page of review cards
  function showNextPage(event) {
    event.preventDefault();
    const totalPages = Math.ceil(reviewCards.length / cardsPerPage);
    if (currentPage < totalPages - 1) {
      currentPage++;
      updatePageVisibility();
    }
  }

  // Function to show the previous page of review cards
  function showPreviousPage(event) {
    event.preventDefault();
    if (currentPage > 0) {
      currentPage--;
      updatePageVisibility();
    }
  }

  // Function to update the visibility of review cards based on the current page
  function updatePageVisibility() {
    const start = currentPage * cardsPerPage;
    const end = start + cardsPerPage;
    reviewCards.forEach((card, index) => {
      if (index >= start && index < end) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });

    // Show/hide previous and next buttons based on current page
    if (currentPage === 0) {
      prevLink.style.display = 'none';
    } else {
      prevLink.style.display = 'inline-block';
    }
    const totalPages = Math.ceil(reviewCards.length / cardsPerPage);
    if (currentPage === totalPages - 1) {
      nextLink.style.display = 'none';
    } else {
      nextLink.style.display = 'inline-block';
    }
  }

  // Add event listeners to the anchor tags
  prevLink.addEventListener('click', showPreviousPage);
  nextLink.addEventListener('click', showNextPage);

  // Show the initial page
  updatePageVisibility();
}


 











  
  






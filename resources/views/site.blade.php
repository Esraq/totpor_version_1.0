
@extends('layouts.master')

@section('content')


<div class="hero-slider">
      <div class="slides">
        <!-- Repeat the slides for seamless looping -->
        <div class="slide">
          <img src="/img/img1.jpg" alt="Cooking Task" />
          <div class="overlay">
            <h1>
              Find The Perfect Job That <br />
              You Deserved
            </h1>
            <div class="hero-buttons">
              <a href="#" class="btn primary">Post Your Job For Free</a>
              <a href="#" class="btn secondary">Earn Money As Job Seeker</a>
            </div>
          </div>
        </div>
        <div class="slide">
          <img src="/img/img2.jpg" alt="Cooking Task" />
          <div class="overlay">
            <h1>
              Find The Perfect Job That <br />
              You Deserved
            </h1>
            <div class="hero-buttons">
              <a href="#" class="btn primary">Post Your Job For Free</a>
              <a href="#" class="btn secondary">Earn Money As Job Seeker</a>
            </div>
          </div>
        </div>
        <div class="slide">
          <img src="/img/img3.jpg" alt="Cooking Task" />
          <div class="overlay">
            <h1>
              Find The Perfect Job That <br />
              You Deserved
            </h1>
            <div class="hero-buttons">
              <a href="#" class="btn primary">Post Your Job For Free</a>
              <a href="#" class="btn secondary">Earn Money As Job Seeker</a>
            </div>
          </div>
        </div>
        <!-- Duplicate slides for infinite loop -->
        <div class="slide">
          <img src="./img/img1.jpg" alt="Cooking Task" />
          <div class="overlay">
            <h1>
              Find The Perfect Job That <br />
              You Deserved
            </h1>
            <div class="hero-buttons">
              <a href="#" class="btn primary">Post Your Job For Free</a>
              <a href="#" class="btn secondary">Earn Money As Job Seeker</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Search Section -->
    <div class="search-section">
      <div class="container">
        <select class="search-category">
          <option value="" disabled selected>Category</option>
          <option value="cleaning">Cleaning</option>
          <option value="plumbing">Plumbing</option>
          <option value="cooking">Cooking</option>
        </select>
        <select class="search-location">
          <option value="" disabled selected>Location</option>
          <option value="new-york">New York</option>
          <option value="los-angeles">Los Angeles</option>
          <option value="chicago">Chicago</option>
        </select>
        <button class="search-btn">Search</button>
      </div>
    </div>

    <div class="container">
      <!-- Popular Categories Section -->
      <div class="popular-categories">
        <h2>Popular Categories</h2>
        <div class="categories-grid">
          <div class="category-card">
            <i>🧹</i>
            <h3>Cleaning Services</h3>
            <p>123 Vacancy</p>
          </div>
          <div class="category-card">
            <i>🔧</i>
            <h3>Furniture Repair</h3>
            <p>123 Vacancy</p>
          </div>
          <div class="category-card">
            <i>⚡</i>
            <h3>Electrical Services</h3>
            <p>123 Vacancy</p>
          </div>
          <div class="category-card">
            <i>🚗</i>
            <h3>Car Repair</h3>
            <p>123 Vacancy</p>
          </div>
          <div class="category-card">
            <i>📈</i>
            <h3>Business Development</h3>
            <p>123 Vacancy</p>
          </div>
          <div class="category-card">
            <i>🤝</i>
            <h3>Sales & Communication</h3>
            <p>123 Vacancy</p>
          </div>
          <div class="category-card">
            <i>📚</i>
            <h3>Teaching & Education</h3>
            <p>123 Vacancy</p>
          </div>
          <div class="category-card">
            <i>🎨</i>
            <h3>Design & Creative</h3>
            <p>123 Vacancy</p>
          </div>
        </div>
      </div>

      <!-- How to Start Working Section -->
      <div class="working-tasker">
        <div class="tasker-content">
          <div class="tasker-images">
            <img src="./img/img1.jpg" alt="Tasker 1" />
            <img src="./img/img2.jpg" alt="Tasker 2" />
            <img src="./img/img3.jpg" alt="Tasker 3" />
            <img src="./img/img1.jpg" alt="Tasker 3" />
          </div>
          <div class="tasker-steps">
            <h2>How Can We Start Working As A Tasker</h2>
            <p>Follow the steps</p>
            <ul>
              <li>✔️ Tempor erat elit rebum at clita</li>
              <li>✔️ Aliqu diam amet diam et eos</li>
              <li>✔️ Clita duo justo magna dolore erat amet</li>
            </ul>
            <a href="#" class="read-more">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- blog -->

    <div class="container">
      <!-- Job Listing Section -->
      <section class="job-listing">
        <h2>Job Listing</h2>
        <div class="tabs">
          <span class="active-tab">Moving In</span>
          <span>Home Maintenance</span>
          <span>Others</span>
        </div>
        <div class="job-card">
          <div class="job-info">
            <h3>Plumber</h3>
            <p><i>📍</i> Mirpur, Dhaka <i>⏱</i> Full Time <i>💵</i> TK3500/=</p>
          </div>
          <div class="job-apply">
            <span>🗓️ Deadline: 01 Jan, 2045</span>
            <button>Apply Now</button>
          </div>
        </div>
      </section>

      <!-- Blog Section -->
      <section class="our-blog">
        <h2>Our Blog</h2>
        <div class="blog-grid">
          <div class="blog-card">
            <img src="./img/img1.jpg" alt="Blog Post" />
            <h3>5 Tips to Ace Your Next Interview</h3>
            <p>
              Learn essential strategies to leave a lasting impression and
              secure your dream job.
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
          <div class="blog-card">
            <img src="./img/img2.jpg" alt="Blog Post" />
            <h3>The Future of Remote Work</h3>
            <p>
              Explore how remote work is reshaping industries and creating new
              opportunities.
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
          <div class="blog-card">
            <img src="./img/img3.jpg" alt="Blog Post" />
            <h3>Top Skills to Learn in 2024</h3>
            <p>
              Stay ahead in your career with these in-demand skills for the
              upcoming year.
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </div>
      </section>
    </div>

    <!-- =============== -->

    <section class="testimonials">
      <h2 class="section-title">Top Performer</h2>
      <div class="testimonials-container">
        <div class="testimonial-card">
          <blockquote>
            <p>
              Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
              stet amet eirmod eos labore diam.
            </p>
          </blockquote>
          <div class="client-info">
            <img
              src="./img/pimg1.jpg"
              width="50px"
              height="60px"
              alt="Client Photo"
            />
            <div>
              <p class="client-name">Client Name</p>
              <p class="client-profession">Profession</p>
            </div>
          </div>
        </div>
        <div class="testimonial-card highlighted">
          <blockquote>
            <p>
              Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
              stet amet eirmod eos labore diam.
            </p>
          </blockquote>
          <div class="client-info">
            <img
              src="./img/pimg2.jpg"
              width="50px"
              height="60px"
              alt="Client Photo"
            />
            <div>
              <p class="client-name">Client Name</p>
              <p class="client-profession">Profession</p>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <blockquote>
            <p>
              Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
              stet amet eirmod eos labore diam.
            </p>
          </blockquote>
          <div class="client-info">
            <img
              src="./img/pimg.jpg"
              width="50px"
              height="60px"
              alt="Client Photo"
            />
            <div>
              <p class="client-name">Client Name</p>
              <p class="client-profession">Profession</p>
            </div>
          </div>
        </div>
      </div>
    </section>



    @endsection
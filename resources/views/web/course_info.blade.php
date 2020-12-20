@extends('web.layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('web/styles/news_post_styles.css') }}" />
<link rel=" stylesheet" type="text/css" href="{{ asset('web/styles/news_post_responsive.css') }}" />

<!-- Home -->

<div class="home">
  <div class="home_background_container prlx_parent">
    <div class="home_background prlx" style="background-image:url(images/news_background.jpg)"></div>
  </div>
  <div class="home_content">
    <h1>The News</h1>
  </div>
</div>

<div class=" news">
  <div class="container">
    <div class="row">

      <!-- News Post Column -->

      <div class="col-lg-8">

        <div class="news_post_container">
          <!-- News Post -->
          <div class="news_post">
            <div class="news_post_image">
              <img src="images/news_1.jpg" alt="https://unsplash.com/@dsmacinnes">
            </div>
            <div class="news_post_top d-flex flex-column flex-sm-row">
              <div class="news_post_date_container">
                <div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                  <div>18</div>
                  <div>dec</div>
                </div>
              </div>
              <div class="news_post_title_container">
                <div class="news_post_title">
                  <a href="news_post.html">Why do you need a qualification?</a>
                </div>
                <div class="news_post_meta">
                  <span class="news_post_author"><a href="#">By Christian Smith</a></span>
                  <span>|</span>
                  <span class="news_post_comments"><a href="#">3 Comments</a></span>
                </div>
              </div>
            </div>
            <div class="news_post_text">
              <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies venenatis. Suspendisse fermentum sodales lacus, lacinia gravida elit dapibus sed. Cras in lectus elit. Maecenas tempus nunc vitae mi egestas venenatis. Aliquam rhoncus, purus in vehicula porttitor, lacus ante consequat purus, id elementum enim purus nec enim. In sed odio rhoncus, tristique ipsum id, pharetra neque. </p>
            </div>

            <div class="news_post_quote">
              <p class="news_post_quote_text"><span>E</span>tiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies venena tis. Suspendisse fermentum sodales lacus, lacinia gravida elit.</p>
            </div>

            <p class="news_post_text" style="margin-top: 59px;">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies venenatis. Suspendisse fermentum sodales lacus, lacinia gravida elit dapibus sed. Cras in lectus elit. Maecenas tempus nunc vitae mi egestas venenatis. Aliquam rhoncus, purus in vehicula porttitor, lacus ante consequat purus, id elementum enim purus nec enim. In sed odio rhoncus, tristique ipsum id, pharetra neque. </p>
          </div>

        </div>

      </div>

      <!-- Sidebar Column -->

      <div class="col-lg-4">
        <div class="sidebar">

          <!-- Archives -->
          <div class="sidebar_section">
            <div class="sidebar_section_title">
              <h3>Archives</h3>
            </div>
            <ul class="sidebar_list">
              <li class="sidebar_list_item"><a href="#">Design Courses</a></li>
              <li class="sidebar_list_item"><a href="#">All you need to know</a></li>
              <li class="sidebar_list_item"><a href="#">Uncategorized</a></li>
              <li class="sidebar_list_item"><a href="#">About Our Departments</a></li>
              <li class="sidebar_list_item"><a href="#">Choose the right course</a></li>
            </ul>
          </div>

          <!-- Tags -->

          <div class="sidebar_section">
            <div class="sidebar_section_title">
              <h3>Tags</h3>
            </div>
            <div class="tags d-flex flex-row flex-wrap">
              <div class="tag"><a href="#">Course</a></div>
              <div class="tag"><a href="#">Design</a></div>
              <div class="tag"><a href="#">FAQ</a></div>
              <div class="tag"><a href="#">Teachers</a></div>
              <div class="tag"><a href="#">School</a></div>
              <div class="tag"><a href="#">Graduate</a></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
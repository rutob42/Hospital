<style>
  .page-section {
  padding: 60px 0;
  background-color: #f9f9f9;
}

.page-section h1 {
  font-size: 2.5rem;
  font-weight: bold;
  color: #2c3e50;
}

.card-doctor {
  background: #fff;
  border: none;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.card-doctor:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.card-doctor .header {
  position: relative;
}

.card-doctor .header img {
  width: 100%;
  border-bottom: 5px solid #3498db;
}

.card-doctor .meta {
  position: absolute;
  bottom: 15px;
  right: 15px;
  display: flex;
  gap: 10px;
  z-index: 2;
}

.card-doctor .meta a {
  background: #3498db;
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: background 0.3s;
}

.card-doctor .meta a:hover {
  background: #2c3e50;
}

.card-doctor .meta span {
  font-size: 1.2rem;
  color: #fff;
}

.card-doctor .body {
  padding: 20px 15px;
  text-align: center;
}

.card-doctor .body p {
  font-size: 1.3rem;
  font-weight: 700;
  color: #2c3e50;
  margin-bottom: 5px;
}

.card-doctor .body span {
  font-size: 1rem;
  color: #7f8c8d;
}

/* Custom styling for carousel items */
.owl-carousel .owl-item {
  margin: 15px;
}

.owl-carousel .item {
  padding: 10px;
}

/* Additional responsive design */
@media (max-width: 768px) {
  .card-doctor {
    margin-bottom: 30px;
  }
}

</style>
<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

      @foreach($doctor as $doctors)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300px;" src="doctorimage/{{$doctors->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->speciality}}</span>
            </div>
          </div>
        </div>
       @endforeach
      </div>
    </div>
  </div>
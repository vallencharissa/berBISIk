<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penilaian</title>
    <link rel="stylesheet" href="{{ asset('css/penilaian.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logoAja.png') }}">
    <script src="https://kit.fontawesome.com/c1fc3d2826.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="back">
        <a href="/riwayat/ {{ Auth::user()->id }}">< Kembali</a>
    </div>

    <h1>Terima kasih telah mengikuti acara ini☻</h1>
    
    <form action="{{ route('submitReview') }}" method="POST">
        @csrf
        <input type="hidden" name="event_id" value="{{ $event->id }}">
        <div>
            <label for="rating">Seberapa menarik acara hari ini?</label>
            <div class="rating">
                @for ($i = 1; $i <= 5; $i++)
                    <input type="radio" id="rating-{{ $i }}" name="rating" value="{{ $i }}" required>
                    <label for="rating-{{ $i }}"><i class="fa-solid fa-star"></i></label>
                @endfor
            </div>
        </div>
        <div class="comment">
            <label for="comment">Kesan dan Pesan</label>
            <textarea name="comment" id="comment" rows="5" required></textarea> 
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<script>
const ratingStars = document.querySelectorAll('.rating label');

ratingStars.forEach((star, index) => {
  star.addEventListener('click', () => {
    const ratingValue = index + 1;
    ratingStars.forEach((s, i) => {
      if (i <= index) {
        s.querySelector('i').classList.add('checked');
      } else {
        s.querySelector('i').classList.remove('checked');
      }
    });
  });
});
</script>
@props(['movie'])

<div>
    <div class="card mb-3" style="max-width: 28rem;">
        <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <h6 class="card-text text-secondary mb-3">({{$movie->original_title}})</h6>
            <p class="card-text text-secondary mb-4">{{$movie->nationality}}</p>
            <p class="card-text text-secondary">{{$movie->date}}</p>
        </div>
        <div class="card-footer bg-primary bg-opacity-25 text-primary">
            @php
                $starVote = $movie->starVote()
                $fullStars = $starVote[0];
                $halfStars = $starVote[1];
                $emptyStars = $starVote[2];
            @endphp
            @for($i=0; $i<$fullStars; $i++)
                <i class="bi bi-star-fill"></i>
            @endfor
            @for($i=0; $i<$halfStars; $i++)
                <i class="bi bi-star-half"></i>
            @endfor
            @for($i=0; $i<$emptyStars; $i++)
                <i class="bi bi-star"></i>
            @endfor
            ({{$movie->vote}})
        </div>
    </div>
</div>
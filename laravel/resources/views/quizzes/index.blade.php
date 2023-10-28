@foreach($quizzes as $quiz)
    <h3>{{ $quiz->title }}</h3>
    <p>{{ $quiz->description }}</p>
@endforeach


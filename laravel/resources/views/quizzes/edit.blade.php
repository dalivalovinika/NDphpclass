<form method="POST" action="{{ $quiz->id ? route('quizzes.update', $quiz->id) : route('quizzes.update') }}">
    @csrf

    @if($quiz->id)
        @method('PATCH')
    @endif


    <input type="text" name="title" value="{{ old('title', $quiz->title) }}" placeholder="Quiz Title">
    <textarea name="description" placeholder="Quiz Description">{{ old('description', $quiz->description) }}</textarea>

    <button type="submit">{{ $quiz->id ? 'Update' : 'Create' }} Quiz</button>
</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vote Page</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<div class="w-screen h-screen flex flex-col space-y-4 p-4">
    <button onclick="submitVote(1)" type="button" class="w-full h-1/2 border rounded bg-green-600 text-2xl font-bold text-white hover:bg-green-500 focus:bg-green-700 rounded-xl">Vote for Candidate 1</button>
    <button onclick="submitVote(2)" type="button" class="w-full h-1/2 border rounded bg-blue-600 text-2xl font-bold text-white hover:bg-blue-500 focus:bg-blue-700 rounded-xl">Vote for Candidate 2</button>
</div>

<script>
    function submitVote(candidateId) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('{{ route('addVote') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify({ candidateId: candidateId }),
        });
    }
</script>

</body>
</html>
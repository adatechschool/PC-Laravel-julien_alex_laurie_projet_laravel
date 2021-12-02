<x-guest-layout>
<<<<<<< HEAD
  {{$post->user->name}}: 
=======
  {{$post->user}}:
>>>>>>> 6e15f180a21dda5faf29de7da3aa13e6a62ebbe3
  {{$post->user->name}}:
  {{$post->description}}
  <img src="{{ $post->img_url }}">
</x-guest-layout>
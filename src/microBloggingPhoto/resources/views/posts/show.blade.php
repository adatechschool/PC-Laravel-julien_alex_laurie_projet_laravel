<x-guest-layout>
  {{$post->user}}: 
  {{$post->description}}
  <img src="{{ $post->img_url }}">
</x-guest-layout>
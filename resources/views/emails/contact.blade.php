<h2>New Contact Form Message</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Mobile:</strong> {{ $data['mobile'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] ?? '' }}</p>

@if(!empty($data['message'] ?? null))
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] ?? '' }}</p>
@endif

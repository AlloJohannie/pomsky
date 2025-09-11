{{-- resources/views/emails/contact.blade.php --}}
@component('mail::message')
# Nouveau message

**Nom :** {{ $data['name'] }}  
**Courriel :** {{ $data['email'] }}  
**Téléphone :** {{ $data['phone'] ?? '—' }}

**Message :**  
{{ $data['message'] }}

@endcomponent

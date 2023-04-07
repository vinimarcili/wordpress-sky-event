DOMAINS = [
  'sky.com.br'
]

function login() {
  event.preventDefault();
  const email = document.getElementById('email').value
  const login = document.getElementById('login-wrapper')
  const video = document.getElementById('video-wrapper')

  const isValidDomain = DOMAINS.includes(email.split('@')[1])

  if (!isValidDomain) {
    Toast.error('E-mail não autorizado', {
      closeButton: true,
      className: 'full',
      position: `bottom center`,
      duration: 360000,
      notOverClick: true,
      immediately: true,
    })
    return
  }
  
  login.classList.toggle('hidden')
  video.classList.toggle('hidden')
}
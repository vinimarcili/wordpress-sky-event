SPREADSHEET_URL = '/assets/emails.csv'

DOMAINS = [
  'sky.com.br'
]

async function login() {
  event.preventDefault()
  Toast.cancelAll()
  const themeUrl = document.getElementById('template-uri').innerHTML
  const email = document.getElementById('email').value.trim()
  const login = document.getElementById('login-wrapper')
  const video = document.getElementById('video-wrapper')

  // read csv
  const csv = new XMLHttpRequest()
  csv.open('GET', themeUrl + SPREADSHEET_URL, false)
  csv.send()
  csv.responseText.replaceAll('\r', '')
  const lines = csv.responseText.split('\n')
  const emails = lines.map(line => line.split(',')[0]).map(email => email.trim())
  // remove first line
  emails.shift()
  const isValidEmail = emails.includes(email)
  const isValidDomain = DOMAINS.includes(email.split('@')[1])

  if (!isValidEmail && !isValidDomain) {
    Toast.error('E-mail não autorizado', {
      closeButton: true,
      className: 'full',
      position: `bottom center`,
      duration: 30000,
      notOverClick: true,
      immediately: true,
    })
    return
  }
  login.classList.toggle('hidden')
  video.classList.toggle('hidden')
}

async function logout() {
  const login = document.getElementById('login-wrapper')
  const video = document.getElementById('video-wrapper')
  login.classList.toggle('hidden')
  video.classList.toggle('hidden')
}
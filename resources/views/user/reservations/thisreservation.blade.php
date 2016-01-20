<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="">
      </div>
      <h1>Reservation</h1>
      <div id="company" class="clearfix">
        <div>Akzará Thematic Spa</div>
        <div>Carrera 36 No. 10-34 ,<br /> Piso 2, COL</div>
        <div>PBX: (574) 588 67-67</div>
        <div><a href="mailto:info@akzaraspa.com">info@akzaraspa.com</a></div>
      </div>
      <div id="project">
        <div><span>RESERVATION ID</span> {{ $reservation->id }}</div>
        <div><span>CLIENT</span> {{ $reservation->forwho }}</div>
        <div><span>EMAIL</span>{{ $user->email }}</div>
        <div><span>DATE</span> {{$date}}</div>
        
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">DATE</th>
            <th class="desc">SERVICE</th>
            <th>PRICE</th>
            <th>TIME</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service"> {{ $reservation->when }} </td>
            <td class="desc">{{ $reservation->service }}</td>
            <td class="unit"> $ {{ $service->price }}</td>
            <td class="qty">{{ $reservation->time }}</td>
            <td class="total"> $ {{ $service->price }}</td>
          </tr>
          
          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total"> $ {{ $service->price }}</td>
          </tr>
          <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total">NA</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total"> $ {{ $service->price }}</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Tratamientos Estéticos, Faciales y Corporales altamente calificados, apoyados en una infraestructura idónea creando una alternativa en pacientes con necesidades de tratamientos estéticos, con la más alta eficiencia, personal calificado, con excelente calidad humana y ética profesional.</div>
      </div>
    </main>
    <footer>
      Para Akzará Thematic Spa es importante conocer sus inquietudes, sugerencias y opiniones frente a nuestros servicios.

Horario de atención: Lun - Vie 09:00 AM - 07:00 PM - Sab 08:00 AM - 04:00 PM
PBX: (574) 588 67-67
Cel: 300 320 8295
Email: info@akzaraspa.com

    </footer>
  </body>
</html>
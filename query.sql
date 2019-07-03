select cuenta_corporativa,count(0) from planta_movil
where cuenta_corporativa in
  (select cuenta_anexo from cobranzas.recibo_digital where numero_recibo in ('C00-62231192', 'C00-62231193','C00-62242412'))
  group by cuenta_corporativa
order by 2 desc

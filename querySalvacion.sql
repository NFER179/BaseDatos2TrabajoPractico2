select distinct a.usuario, b.usuario
from pelis a, pelis b
where not exists (select 'x' from pelis c where a.usuario = c.usuario and
                 not exists (select 'x' from pelis d where c.p = d.p
                            and d.usuario = b.usuario))
and not exists (select 'x' from pelis e where b.usuario = e.usuario and
                 not exists (select 'x' from pelis f where e.p = f.p
                            and f.usuario = a.usuario))
and a.usuario <> b.usuario
and a.usuario < b.usuario;

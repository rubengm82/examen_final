# EXAMEN FINAL DE DAW2
## RUBEN GALLARDO MANCHA

## LARAVEL 12 API

Desarrollo de una API utilizando Laravel 12, aplicando buenas prácticas, estructura MVC y consumo de endpoints.

## CSS LAYOUTS MODERNOS

### CSS Grid
Sistema de diseño bidimensional que permite crear layouts complejos de forma sencilla.

### CSS clamp()
Permite definir tamaños fluidos y adaptativos estableciendo un valor mínimo, uno ideal (dependiente de la pantalla) y uno máximo. Es muy útil para tipografías y espacios responsivos sin usar media queries.


### CSS auto-fit + minmax()

Se usa en CSS Grid para crear diseños responsivos automáticos.

- `minmax()` define el tamaño mínimo y máximo de cada columna  
- `auto-fit` ajusta el número de columnas según el espacio disponible  

Esto permite que los elementos se distribuyan solos en la pantalla sin necesidad de media queries.

```css
.container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
}

h1 {
  font-size: clamp(1.5rem, 2vw, 3rem);
}

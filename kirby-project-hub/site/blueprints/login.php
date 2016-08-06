<?php if(!defined('KIRBY')) exit ?>

title: Project Hub
deletable: false
pages: false
fields:
  logo:
    label: Logo
    type: info
    text:
      en: You can change the logo on the website by changing the image file linked to this page.
      fr: Vous pouvez modifier le logo du site en échangeant le fichier image lié à cette page.
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  text:
    label:
      en: Text
      fr: Texte
    type:  textarea
    size:  large
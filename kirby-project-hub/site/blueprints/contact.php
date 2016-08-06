<?php if(!defined('KIRBY')) exit ?>

title:
  en: Contact Page
  fr: Page de contact
deletable: false
pages: false
files: false
fields:
  title:
    label:
      en: Title
      fr: Titre
    type: title
  name:
    label:
      en: Name
      fr: Nom
    type: text
  street:
    label:
      en: Street
      fr: Rue
    type: text
  zip:
    label:
      en: ZIP
      fr: Code postal
    type: text
    width: 1/4
  location:
    label:
      en: Location
      fr: Ville
    type: text
    width: 3/4
  phone:
    label:
      en: Phone
      fr: Téléphone
    type: tel
    width: 1/2
  email:
    label: Email
    type: email
    width: 1/2
  website:
    label:
      en: Website
      fr: Site Internet
    type: url
    width: 1/2
  twitter:
    label: Twitter
    type: text
    placeholder: @
    icon: twitter
    width: 1/2
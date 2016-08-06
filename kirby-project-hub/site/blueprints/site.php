<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  author:
    label:
      en: Author
      fr: Auteur
    type:  text
  description:
    label:
      en: Description
      fr: Description
    type:  textarea
  keywords:
    label:
      en: Keywords
      fr: Mots-clés
    type:  tags
  copyright:
    label:
      en: Copyright
      fr: Droits d'auteur
    type:  textarea
  animations:
      label:
        en: Do you wish to enable the timeline animations ?
        fr: Est-ce que vous souhaitez activer les animations sur les pages projet ?
      type: toggle
      text: on/off
      default: on
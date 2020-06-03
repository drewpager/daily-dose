const sgMail = require('@sendgrid/mail');
sgMail.setApiKey(process.env.SENDGRID_API_KEY);
const msg = {
  to: 'drew@siegemedia.com',
  from: 'drew@greadings.com',
  subject: 'Hello From SendGrid',
  text: 'This is an email from SendGrid.',
  html: '<strong> Check out this HTML <a href="https://enlightenmedaily.com/" target="_blank">here</a>.</strong>',
};

sgMail.send(msg);
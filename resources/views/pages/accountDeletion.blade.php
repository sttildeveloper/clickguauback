<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clickguau Account Deletion</title>
    <style>
        :root {
            color-scheme: light;
            --bg: #f6f1f5;
            --card: #ffffff;
            --text: #23111b;
            --muted: #6b5a63;
            --accent: #a3125b;
            --accent-soft: #fde7f1;
            --border: #ead7e1;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(180deg, #fff7fb 0%, var(--bg) 100%);
            color: var(--text);
        }

        .wrap {
            max-width: 860px;
            margin: 0 auto;
            padding: 32px 20px 60px;
        }

        .hero {
            margin-bottom: 20px;
        }

        .eyebrow {
            display: inline-block;
            margin-bottom: 12px;
            padding: 6px 10px;
            border-radius: 999px;
            background: var(--accent-soft);
            color: var(--accent);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        h1 {
            margin: 0 0 12px;
            font-size: 34px;
            line-height: 1.1;
        }

        .lead {
            margin: 0;
            max-width: 720px;
            color: var(--muted);
            font-size: 17px;
            line-height: 1.7;
        }

        .card {
            margin-top: 20px;
            padding: 24px;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 20px;
            box-shadow: 0 14px 40px rgba(75, 26, 51, 0.08);
        }

        h2 {
            margin: 0 0 14px;
            font-size: 22px;
        }

        p {
            margin: 0 0 14px;
            color: var(--muted);
            line-height: 1.7;
        }

        ol,
        ul {
            margin: 0;
            padding-left: 22px;
            color: var(--muted);
            line-height: 1.8;
        }

        li + li {
            margin-top: 6px;
        }

        .note {
            margin-top: 16px;
            padding: 14px 16px;
            border-radius: 14px;
            background: #fff8db;
            color: #5f4b00;
            border: 1px solid #f0dc83;
        }

        .support {
            display: inline-block;
            margin-top: 8px;
            color: var(--accent);
            font-weight: 700;
            text-decoration: none;
        }

        .footer {
            margin-top: 24px;
            font-size: 13px;
            color: var(--muted);
        }

        @media (max-width: 640px) {
            h1 {
                font-size: 28px;
            }

            .card {
                padding: 20px;
                border-radius: 16px;
            }
        }
    </style>
</head>
<body>
    <main class="wrap">
        <section class="hero">
            <span class="eyebrow">Google Play Compliance</span>
            <h1>Delete your Clickguau account</h1>
            <p class="lead">
                You can request deletion of your Clickguau account directly inside the app. This page explains where
                the option is located and what happens when your account is deleted.
            </p>
        </section>

        <section class="card">
            <h2>How to delete your account in the app</h2>
            <ol>
                <li>Open the Clickguau app and sign in to the account you want to delete.</li>
                <li>Go to your profile and open <strong>Settings</strong>.</li>
                <li>Tap <strong>Delete Account</strong>.</li>
                <li>Confirm the deletion request when the app asks for confirmation.</li>
            </ol>
            <p class="note">
                The in-app delete flow requires access to the account because the deletion endpoint is authenticated.
            </p>
        </section>

        <section class="card">
            <h2>What data is deleted</h2>
            <p>
                When the account deletion request is completed, Clickguau removes the account record and associated
                content currently linked in the app backend, including posts, bookmarks, comments, followers,
                likes, redeem requests, reports, verification requests and notifications associated with that user.
            </p>
            <p>
                If some records must be retained for legal, security, fraud prevention or accounting reasons, they may
                be kept only for the minimum period required by those obligations.
            </p>
        </section>

        <section class="card">
            <h2>Need help?</h2>
            <p>
                If you cannot access the app and need help locating the deletion flow, contact Clickguau support.
            </p>
            @if(!empty($helpMail))
                <a class="support" href="mailto:{{ $helpMail }}">{{ $helpMail }}</a>
            @else
                <p class="footer">Support email is available from the app settings screen.</p>
            @endif
        </section>

        <p class="footer">
            Public account deletion help page for Clickguau.
        </p>
    </main>
</body>
</html>

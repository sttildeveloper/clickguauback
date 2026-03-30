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

        .alert {
            margin-top: 16px;
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px solid transparent;
            line-height: 1.6;
        }

        .alert-success {
            background: #e9f8ef;
            border-color: #b8e2c5;
            color: #1f5a32;
        }

        .alert-error {
            background: #fff1f1;
            border-color: #f0b9b9;
            color: #7b2424;
        }

        .form-grid {
            display: grid;
            gap: 14px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 700;
            color: var(--text);
        }

        input,
        textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid var(--border);
            border-radius: 12px;
            font: inherit;
            color: var(--text);
            background: #fff;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: fit-content;
            padding: 12px 18px;
            border: 0;
            border-radius: 12px;
            background: var(--accent);
            color: #fff;
            font: inherit;
            font-weight: 700;
            cursor: pointer;
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
                If you cannot access the app, you can contact Clickguau support directly or submit the request form
                below to ask for account deletion assistance.
            </p>
            @if(!empty($helpMail))
                <a class="support" href="mailto:{{ $helpMail }}">{{ $helpMail }}</a>
            @else
                <div class="alert alert-error">
                    Support email is not configured yet. Set <strong>help_mail</strong> in the admin settings or
                    <strong>ACCOUNT_DELETION_SUPPORT_EMAIL</strong> in the environment to expose a direct support
                    channel on this page.
                </div>
            @endif
        </section>

        <section class="card">
            <h2>Request deletion help without the app</h2>
            <p>
                Use this form if you cannot sign in and need the Clickguau team to help you process or locate the
                account deletion flow.
            </p>

            @if(session('accountDeletionRequestStatus') === 'sent')
                <div class="alert alert-success">
                    Your request has been sent to Clickguau support. They will contact you using the email address you provided.
                </div>
            @endif

            @if($errors->has('request'))
                <div class="alert alert-error">
                    {{ $errors->first('request') }}
                </div>
            @endif

            @if(!empty($helpMail))
                <form method="POST" action="{{ route('accountDeletion.request') }}" class="form-grid">
                    @csrf

                    <div>
                        <label for="name">Your name</label>
                        <input id="name" name="name" type="text" maxlength="120" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="alert alert-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="email">Contact email</label>
                        <input id="email" name="email" type="email" maxlength="190" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="alert alert-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="account_identifier">Account email or username</label>
                        <input id="account_identifier" name="account_identifier" type="text" maxlength="190" value="{{ old('account_identifier') }}" required>
                        @error('account_identifier')
                            <div class="alert alert-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="message">Additional details</label>
                        <textarea id="message" name="message" maxlength="1000" placeholder="Describe anything that will help support find your account.">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="alert alert-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="button">Send request</button>
                </form>
            @else
                <p class="footer">
                    This request form will become active as soon as a support destination email is configured.
                </p>
            @endif
        </section>

        <p class="footer">
            Public account deletion help page for Clickguau.
        </p>
    </main>
</body>
</html>
